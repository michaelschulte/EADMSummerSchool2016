# Basic Analysis of Experiment Data Food
# Michael Schulte-Mecklenbeck
# EADM Summer School 2016

# clean slate
  rm(list = ls())

# set working directory MODIFY!!
  setwd("~/Dropbox (2.0)/1_Teaching/3_Seminare/MouselabWeb/EADMSummerSchool2016")

# some libraries we might need
  # install.packages('dplyr')
  # install.packages('ggplot')
  require(dplyr)
  require(ggplot2)

# read rawdata file
  food1.raw.sum <- read.table("CodeExamples/data/food1_proc_sum1.csv", header=TRUE, sep=',') # food1 sum 
  food2.raw.sum <- read.table("CodeExamples/data/food2_proc_sum1.csv", header=TRUE, sep=',') # food2 sum
  food1.raw <- read.table("CodeExamples/data/food1_proc.csv", header=TRUE, sep=',') # food1
  food2.raw <- read.table("CodeExamples/data/food2_proc.csv", header=TRUE, sep=',') # food2
  
  # remove variables that are only available in one dataset
  food2.raw$mlchoice <- NULL
  food2.raw.sum$mlchoice <- NULL

# merge data files
  food.raw.sum <- rbind(food1.raw.sum, food2.raw.sum)
  food.raw <- rbind(food1.raw, food2.raw)

# display summary version of data file
  View(food.raw)
  View(food.raw.sum)
  
# cleaning up
  remove(food2.raw,food1.raw,food2.raw.sum,food1.raw.sum)
  
# descriptive stats ----
  # food1 = cereal
  # food2 = yoghurt
  
  # how many subjects 
  length(unique(food.raw$subject))
  # how did people choose
  food.raw.sum %>%
    group_by(expname) %>%
    do(data.frame(table(.$choice)))
  # how many acquisitions per participant
  ggplot(food.raw, aes(x = subject, y = maxcount)) +
    geom_point() +
    theme_bw()
  # how long did each participant take
    # sum up time variables - all of them start with t_
    time <- 
      food.raw.sum %>%
      select(starts_with('t_')) %>%
      mutate(overall_time = rowSums(.))
    # write overall_time back to main df
    food.raw.sum$overall_time <- time$overall_time
  # denisty plot
    ggplot(food.raw.sum, aes(x =  overall_time)) + #, colour = expname
      geom_density() + 
      theme_bw() 
  # how long was each cell openend?
    cell.time <- 
      food.raw %>%
      filter(event == 'mouseout') %>%
      group_by(boxname, subject) %>%
      summarise(m_time = mean(boxtime),
                sd_time = sd(boxtime),
                sum_time = sum(boxtime))
    # plot
    ggplot(cell.time, aes(x = boxname, y = m_time)) + 
      geom_point(alpha = 0.2) +
      stat_summary(fun.data = "mean_cl_boot", colour = "red", size = 0.8) +
      theme_bw()
    
# first and last acquisition ----
    # first acquisition
    food.raw %>%
      filter(counter == 1) %>%
      group_by(expname, boxname) %>%
      summarise(n = n())
    # last acquistion (= choice)
    food.raw %>%
      group_by(subject) %>%
      filter(counter == max(counter)) %>%
      count(boxname)
    # last acquistion (really)
    food.raw %>%
      filter(event == 'mouseout') %>%
      group_by(subject) %>%
      filter(counter == max(counter)) %>%
      count(boxname)

# all boxes openend? ----    
    names <- unique(as.character(food.raw$boxname)) # get unique cell names
    names <- data.frame(n = names[!names %in% c('choiceA', 'choiceB')]) # remove buttons
    
    summary.boxes <- food.raw %>%
                     filter(event == 'mouseout') %>%
                     group_by(subject) %>%
                     do(check = setequal(.$boxname, names$n))
    
    unlist(summary.boxes$check`
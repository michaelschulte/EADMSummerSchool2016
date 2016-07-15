# Basic Analysis of Experiment Data 
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
  
  food1.raw.sum$t_choice_1 <- NULL # remove column from old naming
  food1.raw.sum$t_choice_2 <- NULL 
  food2.raw.sum$t_choice_1 <- NULL 
  food2.raw.sum$t_choice_2 <- NULL 
  
  food1.raw.sum$f_choice_1 <- NULL
  food1.raw.sum$f_choice_2 <- NULL
  food2.raw.sum$f_choice_1 <- NULL
  food2.raw.sum$f_choice_2 <- NULL
  
  food1.raw$t_choice_1 <- NULL # remove column from old naming
  food1.raw$t_choice_2 <- NULL 
  food2.raw$t_choice_1 <- NULL 
  food2.raw$t_choice_2 <- NULL 
  
  food1.raw$f_choice_1 <- NULL
  food1.raw$f_choice_2 <- NULL
  food2.raw$f_choice_1 <- NULL
  food2.raw$f_choice_2 <- NULL
  
  food1.raw.sum$t_choiceA <- 0
# merge data files
  food.raw.sum <- rbind(food1.raw.sum, food2.raw.sum)
  food.raw <- rbind(food1.raw, food2.raw)

# display summary version of data file
  View(food.raw)
  View(food.raw.sum)

# data cleaning
  raw.clean.sum <- food.raw.sum
  raw.clean <- food.raw
  
# descriptive stats ----

  # how many subjects 
  length(unique(raw.clean$subject))
  # how did people choose
  table(raw.clean.sum$choice)
  # how many acquisitions per participant
  ggplot(raw.clean, aes(x = subject, y = maxcount)) +
    geom_point() +
    theme_bw()
  # how long did each participant take
    # sum up time variables - all of them start with t_
    time <- 
      raw.clean.sum %>%
      select(starts_with('t_')) %>%
      mutate(overall_time = rowSums(.))
    # add suject identifier
    time$subject <- raw.clean.sum$subject
  # plot
    ggplot(time, aes(x = subject, y =  overall_time)) +
      geom_point() + 
      theme_bw()
  # how long was each cell openend?
    cell.time <- 
      raw.clean %>%
      filter(event == 'mouseout') %>%
      group_by(boxname,subject) %>%
      summarise(m_time = mean(boxtime),
                sd_time = sd(boxtime),
                sum_time = sum(boxtime))
  
# first and last acquisition ----
    # first acquisition
    raw.clean %>%
      filter(counter == 1) %>%
      count(boxname)
    # last acquistion (= choice)
    raw.clean %>%
      group_by(subject) %>%
      filter(counter == max(counter)) %>%
      count(boxname)
    # last acquistion (really)
    raw.clean %>%
      filter(event == 'mouseout') %>%
      group_by(subject) %>%
      filter(counter == max(counter)) %>%
      count(boxname)

# all boxes openend? ----    
    names <- unique(as.character(raw.clean$boxname)) # get unique cell names
    names <- data.frame(n = names[!names %in% c('choiceA', 'choiceB')]) # remove buttons
    
    summary.boxes <- raw.clean %>%
                     filter(event == 'mouseout') %>%
                     group_by(subject) %>%
                     do(check = setequal(.$boxname, names$n))
    
    unlist(summary.boxes$check)
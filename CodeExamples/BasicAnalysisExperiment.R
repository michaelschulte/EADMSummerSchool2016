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
  experiment.raw.sum <- read.table("CodeExamples/data/XXX.csv", header=TRUE, sep=',') # raw
  experiment.raw <- read.table("CodeExamples/data/XXX.csv", header=TRUE, sep=',') # raw

# display summary version of data file
  View(experiment.raw)
  View(experiment.raw.sum)

# data cleaning
  # raw.clean.sum <- experiment.raw.sum
  # raw.clean <- experiment.raw
  
# descriptive stats ----

  # how many subjects 
  length(raw.clean$subject)
  # how did people choose
  table(raw.clean$choice)
  # how many acquisitions per participant
  ggplot(raw.clean, aes(x = subject, y = maxcount)) +
    geom_point() +
    theme_bw()
  # how long did each participant take
    # sum up time variables - all of them start with t_
    time <- 
      rawdata.sum %>%
      select(starts_with('t_')) %>%
      mutate(overall_time = rowSums(.))
    # add suject identifier
    time$subject <- rawdata.sum$subject
  # plot
    ggplot(time, aes(x = subject, y =  overall_time)) +
      geom_point() + 
      theme_bw()
  # how long was each cell openend?
    cell.time <- 
      rawdata %>%
      filter(event == 'mouseout') %>%
      group_by(boxname,subject) %>%
      summarise(m_time = mean(boxtime),
                sd_time = sd(boxtime),
                sum_time = sum(boxtime))
  
# first and last acquisition ----
    # first acquisition
    rawdata %>%
      filter(counter == 1) %>%
      count(boxname)
    # last acquistion (= choice)
    rawdata %>%
      group_by(subject) %>%
      filter(counter == max(counter)) %>%
      count(boxname)
    # last acquistion (really)
    rawdata %>%
      filter(event == 'mouseout') %>%
      group_by(subject) %>%
      filter(counter == max(counter)) %>%
      count(boxname)

# all boxes openend? ----    
    names <- unique(as.character(rawdata$boxname)) # get unique cell names
    names <- data.frame(n = names[!names %in% c('btn1', 'btn2')]) # remove buttons
    
    summary.boxes <- rawdata %>%
                     filter(event == 'mouseout') %>%
                     group_by(subject) %>%
                     do(check = setequal(.$boxname, names$n))
    
    unlist(summary.boxes$check)

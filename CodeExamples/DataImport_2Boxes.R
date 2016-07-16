# DEMO Mouselab Data import
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

# read rawdata files
  rawdata <- read.table("CodeExamples/data/Demo2Boxes_proc.csv", header=TRUE, sep=',') # raw
  rawdata.sum <- read.table("CodeExamples/data/Demo2Boxes_proc_sum1.csv", header=TRUE, sep=',') # summarized
  rawdata.sum2 <- read.table("CodeExamples/data/Demo2Boxes_proc_sum2.csv", header=TRUE, sep=',') # summarized halves

# display summary version of data file
  View(rawdata.sum)
  View(rawdata.sum2)
  View(rawdata)

# descriptive stats ----

  # how many subjects 
  length(rawdata.sum$subject)
  # how did people choose
  table(rawdata.sum$choice)
  # how many acquisitions per participant
  ggplot(rawdata.sum, aes(x = subject, y = maxcount)) +
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
    ggplot(time, aes(x = subject, y = overall_time)) +
      geom_point() + 
      theme_bw()
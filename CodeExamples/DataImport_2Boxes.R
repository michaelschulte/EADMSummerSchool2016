# DEMO Mouselab Data import
# Michael Schulte-Mecklenbeck
# EADM Summer School 2016

# clean slate
rm(list = ls())

# set working directory MODIFY!!
setwd("~/Dropbox (2.0)/1_Teaching/3_Seminare/MouselabWeb/EADMSummerSchool2016")

# some libraries we might need
# install.packages('dplyr','ggplot2')
require(dplyr,ggplot2)

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







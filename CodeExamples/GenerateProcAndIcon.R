# link to working directory
setwd("C:/Users/mcwil/onedrive/htdocs/summerschool/data/")

# load sub data sets
e1<-read.csv("ls1_proc.csv",header=TRUE);
e2<-read.csv("ls2_proc.csv",header=TRUE);

#generate extra columns to match datasets
e1$wtpa<-NA
e1$wtpb<-NA
e2$f_B<-NA
e2$f_A<-NA
e2$t_B<-NA
e2$t_A<-NA

#generate choice data from wtp answers
e2$wtpa<-as.numeric(sub('$','',as.character(e2$wtpa),fixed=TRUE)) 
e2$wtpb<-as.numeric(sub('$','',as.character(e2$wtpb),fixed=TRUE)) 
e2$choice<-ifelse(e2$wtpa>e2$wtpb, "A",ifelse(e2$wtpa==e2$wtpb, NA, "B"))

#combine data sets (note: each condition needs to have the same columns:
# this breaks if in some condition no-one opens a particular box as it won;t be in the data
event<-rbind(e1,e2)

#adapt below to indicate what the names are for frequency and time columns 
freqnames<-names(event[1,18:25]);
timenames<-names(event[1,28:35]);

 
#count number of boxes from name list
n.box<-length(freqnames);

# generate transitions

		#generate matrix for transition data (size=n.rows * n.boxes^2) 
		trm<-array(0,dim=c(length(event[,1]),n.box^2));
		#generate transition names 
		#(tr1_1 is a transition from first item in the name list (freqnames) to second item
		trnames<-paste(rep(paste("tr",1:n.box, sep=""), each=n.box),1:n.box,sep="_");

		# loop through all events to count transitions
		# set initial vars
		c<-1; 
		prevbox<-0;
		newbox<-0;
		while (c<=length(event[,1]))
			{
			if(event[c,"counter"]==1) 
				{
				# no transition for first item
				# reset everything (set allto zero)
				prevbox<-0;
				for(i in 1:n.box) {if (event[c,freqnames[i]]==1) prevbox<-i;}
				trm[c,]<-0;
				c<-c+1;	
				}	
				else
				{
				for(i in 1:length(freqnames)) {if (event[c,freqnames[i]]==1) newbox<-i;}
				trm[c,(prevbox-1)*length(freqnames)+newbox]<-1;
				prevbox<-newbox;
				c<-c+1;	
				}
		}

		# create dataframe with transitions
		tr.df<-data.frame(trm);
		rm(trm);
		names(tr.df)<-trnames;

#create complete event dataset including transitions and division
# binds transitions to the data
event.df<-cbind(event, tr.df);

#remove the previous dataset to save memory 
#rm(event);

# now summarize over all divisions for each subject
# set which general variables to keep from event dataset (include any addition vars you have)
colstokeep<-c("subject","expname","choice","roword","colord", "maxcount", "relcount","counter", "div","wtpa", "wtpb");

#set how many divisions you would like
ndiv=2;
# aud div columns to event data
event.df$div = ceiling(event.df$relcount*ndiv);

# set number of summary columns to generate (freq, time and transitions for each box)
numcols<-data.frame(matrix(0,1,n.box*2+n.box^2));
names(numcols)<-c(freqnames,timenames,trnames);

procsum<-data.frame(event.df[1,colstokeep],numcols);

# generate working data matrix for summarizing
trsum<-rep(0,n.box*2+n.box^2);

prevdiv<-1;
prevsubj<-event.df[1,"subject"];
i<-1;
for(c in 1: length(event.df[,1]))
	{
	if (event.df[c,"div"]==prevdiv & event.df[c,"subject"]==prevsubj & c<length(event.df[,1]))
		{trsum<-trsum+as.matrix(event.df[c,c(freqnames,timenames,trnames)])}
		else
		{
		procsum[i,]<-c(event.df[c-1,colstokeep],trsum);
		prevsubj<-event.df[c,"subject"];
		prevdiv<-event.df[c,"div"];
		i<-i+1;
		trsum<-as.matrix(event.df[c,c(freqnames,timenames,trnames)])
		}
	}

# write summary output file (for future reference, as transitions calculations can take a lot of processing time)
#write.csv(procsum,file="all_asian.csv",row.names=FALSE)
# clean up...
#rm(event.df)

# now do some real summaries for icongraphs
# an icongraph is fed with a summarized dataset 
# each row represents a box with X-Y coordinates in the 1x1 space of a single icon graph
# each box has it's own label (boxlabel) and a set of boxes in a signle icon graph 
# has a overall label (boxlabel2)

#attach dataset so we can skip data.frame names		
attach(procsum);

# create dataframe to write transitions to
tr<-data.frame(matrix(0,1,n.box));
names(tr)<-paste("tr",1:n.box,sep="");

# set the coordinates of the boxes you will be drawing
# this will depend on your display and the order of your labels in your datafile

# order of boxes in data "
#		"f_o_a2" "f_p_a2" "f_o_a1" "f_p_a1" "f_o_b2" "f_p_b2" "f_p_b1" "f_o_b1"

## ADAPT how you want to iconplot too look
#		coordinates of boxes in the display (based on order of data)
xcoord<-c(.2, .4, .2, .4, .6, .8, .8, .6);
ycoord<-c(.3, .3, .7, .7, .3, .3, .7, .7);

#open a pdf output (comment out if you just a graphic display)
#pdf("test.pdf", width=12, height=12)

#here I label the boxes with the labels from the data, removing "f_"
#boxlabel<-substr(freqnames,3,6);
# Here I label the boxes based on their actual values
boxlabel<-c("-100","1/36","400","35/36","-150", "25/36", "11/36",  "1600");

# set up an empty output dataframe
iconout<-data.frame(xc=0,yc=0,label="",label2="",meantime=0,meanfreq=0,tr,stringsAsFactors = FALSE);

# now loop through the data
gc<-1; # general counter
yoffset<-0; # offset for each row in the plot
xoffset<-0;
# here we make a separate icongraph per experiment name (condition in this case)
	for (e in unique(expname))
	  {
	  #and for each choice
	  for (c in c("A","B"))
	    {
      #vertical rows start at x=0 everytime
      xoffset <-0;  
	    for (d in unique(div))
				{
        # ADAPT generate the subset of data based on what you want to split the plot on 
		    procsub= procsum[choice==c&!is.na(choice)&div==d&expname==e, c(freqnames,timenames,trnames)];
		    
		    # calculate means for this subset
		    grsum<-colMeans(procsub);			
				# now generate a row in the output file for each box
					for (i in 1:n.box)
						{
						# note x coordinate depends on d (div), so div's are placed horizontally 
						iconout[gc,1:2]<-c(xcoord[i]+d-1+xoffset,ycoord[i]+yoffset);
						iconout[gc,"label"]<-boxlabel[i];
						# ADAPT label above icongraph to indicate subset (adjust)
						iconout[gc,"label2"]<-paste("div=",d, " cond=",e," ch=",c," N=",length(procsub[,1]),sep="");
						iconout[gc,5:(6+n.box)]<-c(grsum[n.box+i],grsum[i],grsum[(n.box*(i-1)+2*n.box+1):(n.box*(i-1)+3*n.box)]);
						gc<-gc+1;
						}
				}
        yoffset<-yoffset+1;
		  }
    }
			
#throw data into variable dt that is used by the iconplot.R script		
dt<-iconout;
		
# note that you can set some parameters to adjust the iconplot
		
		showlegend<-1 #1 to draw legend
		showtitles<-1 # 1 to show titles (label2)
		labelsize<-10  #size of text on boxes
		label2size<-12 #size of text on label2 (titles)
		box_scale_factor<-.3 #this controls the size of the boxes relative to the display.  Could be set as a control
		boxcolor<-72
		arrow_scale_factor<-.15 
		arrowThreshold<-0.02 #sets what arrowlengths to show 
		unittime<-1000
		unitfreq<-1
		arrOffset<-.2;
		ticksize<-.01;
	
		#call second R file that draws the plot
		source("Iconplot.R")
			
#turn of the graphics to close pdf output	
#graphics.off()
		
# other stuff
		
# create attention index score for procsum		
fo<-f_o_a1+f_o_a2+f_o_b1+f_o_b2
fp<-f_p_a1+f_p_a2+f_p_b1+f_p_b2
# outcomes versus probability index
op<-(fo-fp)/(fo+fp)
# show choices across conditions
aggregate(op~expname+choice,data=procsum,mean)
#show OP across conditions
aggregate(op~div+expname,data=procsum,mean)
#simple multilevel model
library(lme4)
m1<-lmer(op~(1|as.factor(subject))+div*expname,data=procsum)
summary(m1)

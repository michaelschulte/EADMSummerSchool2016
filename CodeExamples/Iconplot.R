#R program which draws an attention icon graph
#adapted to R from JSL by ech June 2008 
# updated by martijn Willemsen, Aug 7, 2008



#function for drawing a legend
legend<-function(xf,yf,num){
if (showlegend==1){
	width<-xf*1000/maxtime
	height<-xf*1/maxfix
	arlength<-yf*1/maxtran
	#order is different from that of rect() function in JMP
	rect(0,0,width,height,col=c(66))
	rect(0,0,width,height)
	arrows(width/2,height,width/2,height+arlength,length=0.1)
	arrows(width,height/2,width+arlength,height/2,length=0.1)
	}
}

#Function for drawing a rectangular box centered at xc,yc and having width of xs and height of yx, scaled by box_scale_factor
attenbox<-function(xbc,ybc,xbs,ybs){
	rect((xbc-(xbs/2)),(ybc+(ybs/2)),(xbc+(xbs/2)),(ybc-(ybs/2)),col=c(boxcolor))
	rect((xbc-(xbs/2)),(ybc+(ybs/2)),(xbc+(xbs/2)),(ybc-(ybs/2)))
	c<-1; # draw tickmarks on freq if mark is still within the box
	while (c<=floor(ybs*maxfix/(unitfreq*box_scale_factor))){
	lines(c(xbc-(xbs/2),xbc-(xbs/2)+ticksize),c(c*box_scale_factor*unitfreq/maxfix+ybc-ybs/2,c*box_scale_factor*unitfreq/maxfix+ybc-ybs/2))
	c<-c+1;
	}
	c<-1; # draw tickmarks on time if mark is still within the box
	while (c<=floor(xbs*maxtime/(unittime*box_scale_factor))){	
	lines(c(c*box_scale_factor*unittime/maxtime+xbc-(xbs/2),c*box_scale_factor*unittime/maxtime+xbc-(xbs/2))
	,c(ybc-ybs/2+.005,ybc-(ybs/2)+ticksize))
	c<-c+1;
	}
}

# Function which centers the arrows and draws an arrow of length len
# need to develop trig functions to get coordinates when we know the
# hypotenues' length and the location of x1 and y1 but not x2,y2 

tranarrow<-function(xa,ya,xb,yb,len){
if ((len>arrowThreshold)&!(xa==xb&ya==yb)){
	offsetx<-0
	offsety<-0
	if(xa<xb){
		addy<- .01
		}else{
		addy<- -.01
		}
	if(ya<yb){
		addx<- .01
		}else{
		addx<- -.01
		}
	if(xa==xb){
		ylen<-len
		xlen<-0
		if(xa-floor(xa)<0.5){
			offsetx<- -(abs(ya-yb)/(ySpan/(uniqY-1))-1)*arrOffset+addx
			}else{
			offsetx<- (abs(ya-yb)/(ySpan/(uniqY-1))-1)*arrOffset+addx
			}}	
	else if(ya==yb){
			xlen<-len
			ylen<-0
			if(ya-floor(ya)<0.5){
				offsety<- -(abs(xb-xa)/(xSpan/(uniqX-1))-1)*arrOffset+addy
			}else{
				offsety<-(abs(xb-xa)/(xSpan/(uniqX-1))-1)*arrOffset+addy
		}}else{
			opp<-abs(ya-yb)
			adj<-abs(xa-xb)
			theta<-atan2(opp,adj)
			#then calculate new length
			ylen<-len*sin(theta) #this is the new width
			xlen<-len*cos(theta) #b=c*cos(radians(A)) the new height
			if(xa<xb){
				offsetx<-.01
				offsety<-.01
			}else{
				offsetx<- -.01
				offsety<- .01
				}
			}
		#then position the new vector
		xc<-min(xa,xb)+(abs(xb-xa)/2)+offsetx
		yc<-min(ya,yb)+(abs(yb-ya)/2)+offsety
		xlen<-xlen/2
		ylen<-ylen/2
		if(xa<xb){
			xa<-xc-xlen
			xb<-xc+xlen
			}else{
			xa<-xc+xlen
			xb<-xc-xlen
			}
		if(ya<yb){
			ya<-yc-ylen
			yb<-yc+ylen
			}else{
			ya<-yc+ylen
			yb<-yc-ylen
			}
		arrows(xa,ya,xb,yb,length=0.02)
		}
	}
			
			
			



#Can add code to do the summary, right now expects the data to have the following column order
#    xloc
#     yloc
#     label (does not get an index in the matrix!), contains label for box
#     label2 (does not get an index, contains label for this graph (positioned at .5,.9 in the current 1x1 square)
#     time
#     Nacq
#     transition data a matrix of nrow*nrow, can be directional


#Read table from file.
#dt<-read.table("C:/Research/Iconplot/stackedf3.sas7bdat",header=TRUE)
#dt<-read.csv("ad_plot.txt",header=TRUE)
In<-as.matrix(cbind(dt[,1:2],dt[,5:ncol(dt)]))

#Get Max entry
maxtime<-max(In[,3])
maxfix<-max(In[,4])

#maxX and maxY calculate the maximum of the X and Y coordinate and 
#adjust the display to that
maxX<-round(max(In[,1]))
maxY<-round(max(In[,2]))

size<-nrow(In)
#set number of boxes by the size of transition matrix
noBox<-ncol(In)-4
maxtran<-max(In[,5:(4+noBox)])

#calculate no. of x and y boxes
#JMP code, what is "Design"
uniqX<-length(unique(In[1:noBox,1]))
uniqY<-length(unique(In[1:noBox,2]))
xSpan<-max(In[1:noBox,1])-min(In[1:noBox,1])
ySpan<-max(In[1:noBox,2])-min(In[1:noBox,2])
#show(Xspan, uniqX, Yspan, uniqY);

#need to add code to position if xloc and yloc are all zero or missing

#Now Draw 
#window gets the size from maxX and maxY 
#the script assumes that each set of boxes are in a 1x1 square 

# this is a crude way to set the limits in the plot, drawing two white (invisible) points
plot(c(-.02,maxX+.1),c(-.02,maxY+.1), col="white", xlab="", ylab="",xaxt="n",yaxt="n")

outfix<-(box_scale_factor/maxfix)*In[,4]
outtime<-(box_scale_factor/maxtime)*In[,3]
outtran<-(arrow_scale_factor/maxtran)*In[,5:(4+noBox)]

for(i in 1:size){
	if (showtitles==1 & (i-1)%%noBox==0){
		text(floor(In[i,1])+.5,floor(In[i,2]*2)/2+.9,dt$label2[i],cex=label2size/18)
	}

	#draw a box
	attenbox(In[i,1],In[i,2],outtime[i],outfix[i])
	#put label in the box
	text(In[i,1],In[i,2],dt$label[i],cex=labelsize/18)
}
for(i in 1:size){
	#draw arrows between boxes
	for(j in 1:noBox){
		groupcount<-floor((i-1)/noBox)*noBox
		tranarrow(In[i,1],In[i,2],In[(groupcount+j),1],In[(groupcount+j),2],outtran[i,j])
	}
}


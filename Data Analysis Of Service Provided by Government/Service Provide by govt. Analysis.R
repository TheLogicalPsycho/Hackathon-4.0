library(stringr)
library(ggplot2)
library(dplyr)
library(plyr)

data<-read.xlsx("e-mtitra Data.xlsx",sheetIndex = 1)
View(data)
Agriculture<-subset(data,Department=="AGRICULTURE DEPARTMENT")
nrow(Agriculture)
Licpos = grep('License', data$Service.Name)
license<-data[pos,2]
length(license)
RenewalPos= grep('Renewal', data$Service.Name)
Renewal<-data[RenewalPos,2]
length(Renewal)
pattern<-function(x1)
{
  l1<-grep(x1,data$Service.Name)
  length(l1)
}
abc<-c("License","Renewal","Certificate","Permission","Subsidy","Insurance","Exam","Form Filling","Payment","Scheme","Admission","Registration")
sum(str_count(data$Service.Name, abc))
abc<-c("Form","Filling","Form Filling")
abc<-c("License","Renewal","License Renewal")
sum=0
for(a in 1:length(abc))
{
  sum=sum+(pattern(abc[a]))
}
paste("Total License Related Service ",sum)


Services<-c("License","Renewal","Certificate","Permission","Subsidy","Insurance","Exam","Form Filling","Payment","Scheme","Admission","Registration")
collData<-sapply(Services,function(x1) length(grep(x1,data$Service.Name)))
colData<-as.character(collData)
abcData<-data.frame(Services,colData)
sort(abcData)
ggplot(abcData,aes(Services,colData)) + geom_bar(stat = "identity") + theme(axis.text.x=element_text(angle = 90,vjust = 0.5,hjust = 1)) +ggtitle("Services Provided by Government") +labs(x="Services", y="No. of Services Provided by Government")
aggregate(data$Service.Name,data$Department,data)
ddply(data,.(Department),summarize,total_Services=length(Service.Name))
gr<-data %>% select(Service.Name,Department) %>%group_by(Department)%>% summarise(Total_Service=length(Service.Name)) %>% arrange(-Total_Service)



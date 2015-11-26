/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 12                        */
/* Date de crÈation :  26/11/2015 10:34:37                      */
/*==============================================================*/


create database if not exists dasi character set utf8 collate utf8_unicode_ci;
use dasi;

grant all privileges on dasi.* to 'dasi_user'@'localhost' identified by 'dasi';


drop table if exists ARTICLETECH;

drop table if exists CHATMESSAGE;

drop table if exists CURRENTSTUDENT;

drop table if exists DOCUMENT;

drop table if exists HOMEWORK;

drop table if exists INFORMATION;

drop table if exists JOBOFFER;

drop table if exists OLDSTUDENT;

/*==============================================================*/
/* Table : ARTICLETECH                                          */
/*==============================================================*/
create table ARTICLETECH 
(
   ID_ARTICLETECH       integer                        not null,
   TITLE_ARTICLETECH    varchar(25)                    not null,
   CONTENT_ARTICLETECH  varchar(500)                   not null,
   DATE_ARTICLETECH     date                           not null,
   AUTHOR_ARTICLETECH   varchar(25)                    not null,
   constraint PK_ARTICLETECH primary key (ID_ARTICLETECH)
);


/*==============================================================*/
/* Table : CHATMESSAGE                                          */
/*==============================================================*/
create table CHATMESSAGE 
(
   ID_CHATMESSAGE       integer                        not null,
   MESSAGE_CHATMESSAGE  varchar(500)                   not null,
   DATEHEURE_CHATMESSAGE timestamp                      not null,
   constraint PK_CHATMESSAGE primary key (ID_CHATMESSAGE)
);



/*==============================================================*/
/* Table : CURRENTSTUDENT                                       */
/*==============================================================*/
create table CURRENTSTUDENT 
(
   ID_CURRENTSTUDENT    integer                        not null,
   ID_ARTICLETECH       integer                        not null,
   ID_INFORMATION       integer                        not null,
   ID_HOMEWORK          integer                        not null,
   ID_DOCUMENT          integer                        not null,
   ID_JOBOFFER          integer                        not null,
   ID_CHATMESSAGE       integer                        not null,
   LOGIN_CURRENTSTUDENT varchar(25)                    not null,
   PASSWORD_CURRENTSTUDENT varchar(25)                    not null,
   NAME_CURRENTSTUDENT  varchar(25)                    not null,
   LASTNAME_CURRENTSTUDENT varchar(25)                    not null,
   MAIL_CURRENTSTUDENT  varchar(25)                    not null,
   CLASS_CURRENTSTUDENT char(10)                       null,
   constraint PK_CURRENTSTUDENT primary key (ID_CURRENTSTUDENT)
);


/*==============================================================*/
/* Table : DOCUMENT                                             */
/*==============================================================*/
create table DOCUMENT 
(
   ID_DOCUMENT          integer                        not null,
   TITLE_DOCUMENT       varchar(200)                   not null,
   DATE_DOCUMENT        date                           not null,
   constraint PK_DOCUMENT primary key (ID_DOCUMENT)
);


/*==============================================================*/
/* Table : HOMEWORK                                             */
/*==============================================================*/
create table HOMEWORK 
(
   ID_HOMEWORK          integer                        not null,
   DISCIPLINE_HOMEWORK  varchar(2000)                  not null,
   DATE_HOMEWORK        date                           not null,
   SUBJECT_HOMEWORK     varchar(2000)                  not null,
   constraint PK_HOMEWORK primary key (ID_HOMEWORK)
);

/*==============================================================*/
/* Table : INFORMATION                                          */
/*==============================================================*/
create table INFORMATION 
(
   ID_INFORMATION       integer                        not null,
   TITLE_INFORMATION    varchar(100)                   not null,
   CONTENT_INFORMATION  varchar(2000)                  not null,
   DATE_PUB_INFORMATION date                           not null,
   DATE_INFORMATION     date                           not null,
   constraint PK_INFORMATION primary key (ID_INFORMATION)
);


/*==============================================================*/
/* Table : JOBOFFER                                             */
/*==============================================================*/
create table JOBOFFER 
(
   ID_JOBOFFER          integer                        not null,
   TITILE_JOBOFFER      varchar(25)                    not null,
   CONTENT_JOBOFFER     varchar(2000)                  not null,
   DATE_JOBOFFER        date                           not null,
   PLACE_JOBOFFER       varchar(50)                    not null,
   constraint PK_JOBOFFER primary key (ID_JOBOFFER)
);


/*==============================================================*/
/* Table : OLDSTUDENT                                           */
/*==============================================================*/
create table OLDSTUDENT 
(
   ID_OLDSTUDENT        integer                        not null,
   NAME_OLDSTUDENT      varchar(30)                    not null,
   MAIL_OLDSTUDENT      varchar(25)                    not null,
   PROMOTION_OLDSTUDENT date                           not null,
   JOB_OLDSTUDENT       varchar(200)                   not null,
   EXPERIENCE_OLDSTUDENT varchar(2000)                  not null,
   constraint PK_OLDSTUDENT primary key (ID_OLDSTUDENT)
);


alter table CURRENTSTUDENT
   add constraint FK_CURRENTS_APPARTIEN_CHATMESS foreign key (ID_CHATMESSAGE)
      references CHATMESSAGE (ID_CHATMESSAGE)
      on update restrict
      on delete restrict;

alter table CURRENTSTUDENT
   add constraint FK_CURRENTS_A_ETE_ECR_ARTICLET foreign key (ID_ARTICLETECH)
      references ARTICLETECH (ID_ARTICLETECH)
      on update restrict
      on delete restrict;

alter table CURRENTSTUDENT
   add constraint FK_CURRENTS_EST_DONNE_HOMEWORK foreign key (ID_HOMEWORK)
      references HOMEWORK (ID_HOMEWORK)
      on update restrict
      on delete restrict;

alter table CURRENTSTUDENT
   add constraint FK_CURRENTS_EST_PUBLI_DOCUMENT foreign key (ID_DOCUMENT)
      references DOCUMENT (ID_DOCUMENT)
      on update restrict
      on delete restrict;

alter table CURRENTSTUDENT
   add constraint FK_CURRENTS_EST_PUBLI_INFORMAT foreign key (ID_INFORMATION)
      references INFORMATION (ID_INFORMATION)
      on update restrict
      on delete restrict;

alter table CURRENTSTUDENT
   add constraint FK_CURRENTS_EST_PUBLI_JOBOFFER foreign key (ID_JOBOFFER)
      references JOBOFFER (ID_JOBOFFER)
      on update restrict
      on delete restrict;


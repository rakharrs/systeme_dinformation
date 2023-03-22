create sequence societeSeq;
create sequence logoSeq;
create sequence localSeq;
create table societe(
    idSociete varchar(100) primary key default concat('societe',nextval('societeseq')),
    name varchar(100) not null ,
    fondateur varchar(200) not null ,
    siege varchar(200) not null ,
    status varchar not null ,
    nif varchar not null ,
    nif_path varchar ,
    num_stat varchar not null ,
    telecopie varchar(20) not null ,
    telephone varchar(20) not null ,
    description varchar(255),
    mdp varchar(200)not null ,
    email varchar not null ,
    date_creation date not null ,
    date_exercice date not null
);



create table logo(
    idLogo varchar primary key default concat('logo',nextval('logoSeq')),
    idSociete varchar references societe(idSociete),
    status int not null default 0
);

create  table localisation(
    idLocalisation varchar primary key default concat('local',nextval('localSeq')),
    idSociete varchar references societe(idSociete),
    localisation varchar not null ,
    address varchar not null
);

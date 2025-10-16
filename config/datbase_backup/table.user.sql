CREATE TABLE users(
            id BIGSERIAL PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            mobile_number VARCHAR(20) NOT NULL,
            ide_number VARCHAR(15) NULL UNIQUE,
            address TEXT NULL,
            birthday DATE NULL,
            email VARCHAR(200) NOT NULL UNIQUE,
            password TEXT NOT NULL,
            status BOOLEAN NOT NULL DEFAULT TRUE,
            created at TIMESTAMPtZ NOT NULL DEFAULT now(),
            updated at TIMESTAMPtZ NOT NULL DEFAULT now(),
            deleted at TIMESTAMPtZ NULL


);
insert into users(firstname, lastname, mobile_number, email, password) 
values('Joan C','Ayala','465133','joan@mail.com','1234');




CREATE TABLE countri(
            id-conuntri BIGSERIAL PRIMARY KEY,
            Name_countri VARCHAR(30) NOT NULL,
            Abbre VARCHAR(15) not NULL,
            status BOOLEAN NOT NULL DEFAULT TRUE,
            created at TIMESTAMPtZ NOT NULL DEFAULT now(),
            updated at TIMESTAMPtZ NOT NULL DEFAULT now(),
            deleted at TIMESTAMPtZ NULL


);




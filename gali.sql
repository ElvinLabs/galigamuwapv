



/* KEEP EXAM MARKS*/
CREATE TABLE EXAM_MARKS(
    Exam_yr YEAR NOT NULL PRIMARY KEY,
    Amount INT(3) NOT NULL,
    Pass INT(3) NOT NULL,
    Percentage FLOAT(10,4) NOT NULL
);


/* GALARY */

CREATE TABLE Galary(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(256),
    Add_date DATE,
    Des BLOB,
    Img_name VARCHAR(256) NOT NULL
);


/*Achivements*/

CREATE TABLE Achivements(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(256) NOT NULL,
    Description BLOB NOT NULL,
    A_date DATE NOT NULL
);


/*achivements slider*/
CREATE TABLE Slider(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Image_name VARCHAR(256) NOT NULL,
    Description VARCHAR(256) NOT NULL
);

/* notice bord*/
CREATE TABLE Notice_Bord(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(256) NOT NULL,
    Img_name VARCHAR(256) NOT NULL,
    Description BLOB NOT NULL,
    Name VARCHAR(256) NOT NULL,
    Grade VARCHAR(30) NOT NULL,
    Added_date DATE NOT NULL
);

/*news*/
CREATE TABLE News(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    N_date DATE NOT NULL,
    Title VARCHAR(256) NOT NULL,
    Description BLOB NOT NULL
);


/* past priciples*/
CREATE TABLE Principles(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(256) NOT NULL,
    Start_date DATE NOT NULL,
    End_date DATE NOT NULL   
);


CREATE TABLE Clubs(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    C_img VARCHAR(256) NOT NULL,
    Incharge VARCHAR(256) NOT NULL,
    Description BLOB NOT NULL
);

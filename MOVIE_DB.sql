drop database if exists movies;
create database if not exists movies;

use movies;

create table movie(
	movie_id int auto_increment primary key not null,
    title varchar(100) not null,
    body text,
    score double,
    release_date date,
    trailer_link varchar(200),    
    poster varchar(100)    
);

insert into movie (movie_id, title, release_date,trailer_link, poster) values 
(1,"Avatar","2009-12-15","https://www.youtube.com/watch?v=5PSNL1qE6VY","https://image.tmdb.org/t/p/w500/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg"),
(2,"Strange World","2022-11-23","https://www.youtube.com/watch?v=bKh2G73gCCs","https://image.tmdb.org/t/p/w500/kgJ8bX3zDQDM2Idkleis28XSVnu.jpg"),
(3,"Troll","2022-12-01","https://www.youtube.com/watch?v=AiohkY_XQYQ","https://image.tmdb.org/t/p/w500/9z4jRr43JdtU66P0iy8h18OyLql.jpg"),
(4,"Avatar: The Way of Water","2022-12-16","https://www.youtube.com/watch?v=d9MyW72ELq0","https://image.tmdb.org/t/p/w500/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg"),
(5,"Roald Dahl's Matilda the Musical","2022-11-25","https://www.youtube.com/watch?v=lroAhsDr2vI","https://image.tmdb.org/t/p/w500/ga8R3OiOMMgSvZ4cOj8x7prUNYZ.jpg"),
(6,"Puss in Boots: The Last Wish","2022-12-21","https://www.youtube.com/watch?v=tHb7WlgyaUc","https://image.tmdb.org/t/p/w500/1NqwE6LP9IEdOZ57NCT51ftHtWT.jpg"),
(7,"Black Adam","2022-10-19","https://www.youtube.com/watch?v=JaV7mmc9HGw","https://image.tmdb.org/t/p/w500/pFlaoHTZeyNkG83vxsAJiGzfSsa.jpg"),
(8,"The Woman King","2022-09-15","https://www.youtube.com/watch?v=3RDaPV_rJ1Y","https://image.tmdb.org/t/p/w500/5O1GLla5vNuegqNxNhKL1OKE1lO.jpg"),
(9,"M3GAN","2023-01-06","https://www.youtube.com/watch?v=BRb4U99OU80","https://image.tmdb.org/t/p/w500/xBl5AGw7HXZcv1nNXPlzGgO4Cfo.jpg"),
(10,"Black Panther: Wakanda Forever","2022-11-11","https://www.youtube.com/watch?v=_Z3QKkl1WyM","https://image.tmdb.org/t/p/w500/cryEN3sWlgB2wTzcUNVtDGI8bkM.jpg");

create table backdrop(	
    link varchar(500),
    movie_id int,    
    primary key (link, movie_id),
    foreign key (movie_id) references movie (movie_id)
);

insert into backdrop values
("https://image.tmdb.org/t/p/original/r9PkFnRUIthgBp2JZZzD380MWZy.jpg",6),
("https://image.tmdb.org/t/p/original/faXT8V80JRhnArTAeYXz0Eutpv9.jpg",6),
("https://image.tmdb.org/t/p/original/pdrlEaknhta2wvE2dcD8XDEbAI4.jpg",6),
("https://image.tmdb.org/t/p/original/tGwO4xcBjhXC0p5qlkw37TrH6S6.jpg",6),
("https://image.tmdb.org/t/p/original/cP8YNG3XUeBmO8Jk7Skzq3vwHy1.jpg",6),
("https://image.tmdb.org/t/p/original/qLE8yuieTDN93WNJRmFSAEJChOg.jpg",6),
("https://image.tmdb.org/t/p/original/vNuHqmOJRQXY0PBd887DklSDlBP.jpg",6),
("https://image.tmdb.org/t/p/original/uUCc62M0I3lpZy0SiydbBmUIpNi.jpg",6),
("https://image.tmdb.org/t/p/original/2wPJIFrBhzzAP8oHDOlShMkERH6.jpg",6),
("https://image.tmdb.org/t/p/original/fnfirCEDIkxZnQEtEMMSgllm0KZ.jpg",6),
("https://image.tmdb.org/t/p/original/s16H6tpK2utvwDtzZ8Qy4qm5Emw.jpg",4),
("https://image.tmdb.org/t/p/original/evaFLqtswezLosllRZtJNMiO1UR.jpg",4),
("https://image.tmdb.org/t/p/original/198vrF8k7mfQ4FjDJsBmdQcaiyq.jpg",4),
("https://image.tmdb.org/t/p/original/zaapQ1zjKe2BGhhowh5pM251Gpl.jpg",4),
("https://image.tmdb.org/t/p/original/tQ91wWQJ2WRNDXwxuO7GCXX5VPC.jpg",4),
("https://image.tmdb.org/t/p/original/5gPQKfFJnl8d1edbkOzKONo4mnr.jpg",4),
("https://image.tmdb.org/t/p/original/2fS9cpar9rzxixwnRptg4bGmIym.jpg",4),
("https://image.tmdb.org/t/p/original/fkGR1ltNbvERk3topo4dP3gWsvR.jpg",4),
("https://image.tmdb.org/t/p/original/rb9IHprKNoSKqatP2vr25unUDSu.jpg",4),
("https://image.tmdb.org/t/p/original/37ZswIuRQcRBN7kHij5MBjzRMRt.jpg",4),
("https://image.tmdb.org/t/p/original/5kAGbi9MFAobQTVfK4kWPnIfnP0.jpg",9),
("https://image.tmdb.org/t/p/original/dlxzUj7z1MqEcFiwvvrj0bvBKDY.jpg",9),
("https://image.tmdb.org/t/p/original/q2fY4kMXKoGv4CQf310MCxpXlRI.jpg",9),
("https://image.tmdb.org/t/p/original/pTxwFdsdDWzpCRYuk1QbggdaOlL.jpg",9),
("https://image.tmdb.org/t/p/original/1zuz2RgFoOjulkjjNHHFc3WiHGB.jpg",9),
("https://image.tmdb.org/t/p/original/7HqxI1IXMloT9VTSuDC8ikaj810.jpg",9),
("https://image.tmdb.org/t/p/original/vpK2rp3J5LiC01HoNM0j9DEHQ1T.jpg",9),
("https://image.tmdb.org/t/p/original/cNHXdmr4amP6EPCMa0dqD8rwzDV.jpg",9),
("https://image.tmdb.org/t/p/original/txQLFd6rfQrskQhFENkS1jElptt.jpg",9),
("https://image.tmdb.org/t/p/original/dC4tj1ONdlZ2TWv4XD2SA1KUnJN.jpg",9),
("https://image.tmdb.org/t/p/original/53BC9F2tpZnsGno2cLhzvGprDYS.jpg",3),
("https://image.tmdb.org/t/p/original/e9Qb2kmBnMXHCmNMI8NX1JbWhh1.jpg",3),
("https://image.tmdb.org/t/p/original/2WjOOOGUu6dp4r8VqR5n48DY7JG.jpg",3),
("https://image.tmdb.org/t/p/original/duIsyybgrC4S8kcCIVaxNOttV15.jpg",3),
("https://image.tmdb.org/t/p/original/3RS8runn9AfrYDzRVPWuGPmvXQf.jpg",3),
("https://image.tmdb.org/t/p/original/8wLRn2VvBlCu6cqYS4ypipnwosr.jpg",3),
("https://image.tmdb.org/t/p/original/zDqVVkmfvj47FBUE5lwE4rWnITu.jpg",3),
("https://image.tmdb.org/t/p/original/682Ui5DwZDdbIPzKAEOR7cJlMXa.jpg",3),
("https://image.tmdb.org/t/p/original/6jdlppcnGi3XuJamfs4Vl7HyxB.jpg",3),
("https://image.tmdb.org/t/p/original/uIq83ogs7QBEWi1aqmUrdDIH61m.jpg",3),
("https://image.tmdb.org/t/p/original/bQXAqRx2Fgc46uCVWgoPz5L5Dtr.jpg",7),
("https://image.tmdb.org/t/p/original/9hNtTwY8P5v2MKnUeb7iuREI7Yb.jpg",7),
("https://image.tmdb.org/t/p/original/zplntIhzXyBiXFYWReETxh0uyFF.jpg",7),
("https://image.tmdb.org/t/p/original/yxkhM18dYwsRRffLnd9lz2d4i0v.jpg",7),
("https://image.tmdb.org/t/p/original/bgaBKREAfUtZgvd6zoV6RQRcIUt.jpg",7),
("https://image.tmdb.org/t/p/original/uqYxoj4hqwocwfBs2xxGyQT88Yk.jpg",7),
("https://image.tmdb.org/t/p/original/qBx97wytqlyPqXATHqRgIVFxJRU.jpg",7),
("https://image.tmdb.org/t/p/original/d6MhreFdMHONqX3iZlJGCF8UkIt.jpg",7),
("https://image.tmdb.org/t/p/original/9inNotReApz0n50WvWbrt0n1cbL.jpg",7),
("https://image.tmdb.org/t/p/original/pSOuqtJmdh7aI1yiK7M8e0PmbPC.jpg",7),
("https://image.tmdb.org/t/p/original/o0s4XsEDfDlvit5pDRKjzXR4pp2.jpg",1),
("https://image.tmdb.org/t/p/original/8I37NtDffNV7AZlDa7uDvvqhovU.jpg",1),
("https://image.tmdb.org/t/p/original/2YLOjUiczXEgVZFDSIeH3iWB3Ub.jpg",1),
("https://image.tmdb.org/t/p/original/Yc9q6QuWrMp9nuDm5R8ExNqbEq.jpg",1),
("https://image.tmdb.org/t/p/original/jlQJDD0L5ZojjlS0KYnApdO0n19.jpg",1),
("https://image.tmdb.org/t/p/original/sfw4m2tOgQRzhF6VXxaXGfd1vX.jpg",1),
("https://image.tmdb.org/t/p/original/7ABsaBkO1jA2psC8Hy4IDhkID4h.jpg",1),
("https://image.tmdb.org/t/p/original/xMMrBziwJqrgjerqpNeQvwuwiUp.jpg",1),
("https://image.tmdb.org/t/p/original/chauy3iJaZtrMbTr72rgNmOZwo3.jpg",1),
("https://image.tmdb.org/t/p/original/mYJkJ7YxJsUNI1nAOOUOpRN2auC.jpg",1),
("https://image.tmdb.org/t/p/original/nWs0auTqn2UaFGfTKtUE5tlTeBu.jpg",5),
("https://image.tmdb.org/t/p/original/bPftMelR4N3jUg2LTlEblFz0gWk.jpg",5),
("https://image.tmdb.org/t/p/original/u2MLMkGEjJGQDs17Vmoej1RYFph.jpg",5),
("https://image.tmdb.org/t/p/original/jG52tsazn04F1fe8hPZfVv7ICKt.jpg",5),
("https://image.tmdb.org/t/p/original/4INEI7t7Vcg0cFvze7UIgwYCeSG.jpg",5),
("https://image.tmdb.org/t/p/original/krAu6znzW8c54NdJPneNi4bem1l.jpg",5),
("https://image.tmdb.org/t/p/original/6TUMppDMrYA4gzoaDUbbSnZFlxW.jpg",5),
("https://image.tmdb.org/t/p/original/hacV1h1SWrPlrerF3xpetvEdqT.jpg",5),
("https://image.tmdb.org/t/p/original/7iXsB1r9IK17ZFShqoxcHKQ7dLp.jpg",5),
("https://image.tmdb.org/t/p/original/dwiRYDLcFyDOkgkSc1JFtTr6Kdk.jpg",5),
("https://image.tmdb.org/t/p/original/yYrvN5WFeGYjJnRzhY0QXuo4Isw.jpg",10),
("https://image.tmdb.org/t/p/original/xDMIl84Qo5Tsu62c9DGWhmPI67A.jpg",10),
("https://image.tmdb.org/t/p/original/cs3LpA38BS2XDPfUzdgMB537XOo.jpg",10),
("https://image.tmdb.org/t/p/original/6SGMzCsaU094Mt32IHGkIYtIl06.jpg",10),
("https://image.tmdb.org/t/p/original/bty0TwJGsxMqYRptgyzn28Cxq5y.jpg",10),
("https://image.tmdb.org/t/p/original/h2jp3CSdTPc22mUqps9I8vXDPaN.jpg",10),
("https://image.tmdb.org/t/p/original/fSfWloWi5rmqbmC7GhO0HY2TMZW.jpg",10),
("https://image.tmdb.org/t/p/original/vZujZnmkYB5nGUC5d5llK9DbGLk.jpg",10),
("https://image.tmdb.org/t/p/original/8sMmAmN2x7mBiNKEX2o0aOTozEB.jpg",10),
("https://image.tmdb.org/t/p/original/geI3Mk7nehX1kvyIY3K5ajaiNfI.jpg",10),
("https://image.tmdb.org/t/p/original/5wDBVictj4wUYZ31gR5WzCM9dLD.jpg",2),
("https://image.tmdb.org/t/p/original/zNIlXd7CAz0hHAInbs2nsFRc0xQ.jpg",2),
("https://image.tmdb.org/t/p/original/1rukJHAP5p6DNHe75Oo1D0m3SnR.jpg",2),
("https://image.tmdb.org/t/p/original/aKbe411WyjTZy1OZUVIdNDYVf21.jpg",2),
("https://image.tmdb.org/t/p/original/9RKvxz0IryD2ofLYyGpnE7HeWlR.jpg",2),
("https://image.tmdb.org/t/p/original/kFURsDklj7QGMMkGJVwDBaJJn05.jpg",2),
("https://image.tmdb.org/t/p/original/v6oBDkd7ogXzTQxIU0H5SXq0hOL.jpg",2),
("https://image.tmdb.org/t/p/original/fBshLiEJcjdfrU3qQBIINcePSsm.jpg",2),
("https://image.tmdb.org/t/p/original/3oie0kID8SNCjkqN6Raweg5dJa.jpg",2),
("https://image.tmdb.org/t/p/original/zgFldVKON1Nxp8ui7HVABGKDQKM.jpg",2),
("https://image.tmdb.org/t/p/original/gkseI3CUfQtMKX41XD4AxDzhQb7.jpg",8),
("https://image.tmdb.org/t/p/original/wSILunFEbvw00Ql2aaMHCSZf3cI.jpg",8),
("https://image.tmdb.org/t/p/original/xTsERrOCW15OIYl5aPX7Jbj38wu.jpg",8),
("https://image.tmdb.org/t/p/original/j06sSrtbqnZdSgG6yEduao95y48.jpg",8),
("https://image.tmdb.org/t/p/original/v4YV4ne1nwNni35iz4WmpZRZpCD.jpg",8),
("https://image.tmdb.org/t/p/original/6n5ln1vWGD3JyT6Ibt7ZxjSxY3v.jpg",8),
("https://image.tmdb.org/t/p/original/gi47WUUYVQWaLE5mJraS87ycdy6.jpg",8),
("https://image.tmdb.org/t/p/original/dTQOU5a32K3UPTIXHgipEqN41OM.jpg",8),
("https://image.tmdb.org/t/p/original/7zQJYV02yehWrQN6NjKsBorqUUS.jpg",8),
("https://image.tmdb.org/t/p/original/rdDL4y7BxGyXFEDJgAG4lz89bG2.jpg",8);

create table genre(
	genre_id int auto_increment primary key not null,
    genre_name varchar(20) unique
);

insert into genre (genre_name) values 
('Action'),
('Adventure'),
('Horror'),
('Drama'),
('Fantasy'),
('Animation'),
('Family'),
('Comedy'),
('History'),
('Science Fiction');

create table movie_genre(
	movie_id int,
    genre_id int,
    foreign key (movie_id) references movie (movie_id),
    foreign key (genre_id) references genre (genre_id)
);

insert into movie_genre values
(1,1),
(1,2),
(1,5),
(1,10),
(2,2),
(2,6),
(2,7),
(2,10),
(3,1),
(3,2),
(3,5),
(4,1),
(4,2),
(4,10),
(5,5),
(5,7),
(5,8),
(6,1),
(6,2),
(6,6),
(6,7),
(6,8),
(7,1),
(7,5),
(7,10),
(8,1),
(8,4),
(8,9),
(9,3),
(9,8),
(9,10),
(10,1),
(10,2),
(10,10);

create table user_client(
user_id int auto_increment primary key unique,
username varchar(50) not null unique,
user_password varchar(100) not null,
mail varchar(100) not null,
registration_date datetime not null,
user_profile enum("basic","premium","admin") DEFAULT "basic" not null
);

INSERT INTO user_client (username, mail, user_password, user_profile, registration_date)
VALUES ('Admin', 'admin@example.com', '0000', 'admin', now()),
('Usuario1', 'usuario1@example.com', '0000', 'basic', now()),
('Usuario2', 'usuario1@example.com', '0000', 'premium', now())
;
drop table if exists review;
create table review(
review_id int auto_increment primary key not null,
movie_id int not null,
user_id int not null,
rating int not null,
title_review text not null,
body text not null,
date_timestamp datetime not null,
foreign key (movie_id) references movie (movie_id),
foreign key (user_id) references user_client (user_id)
);

INSERT INTO review (movie_id, user_id, rating, title_review, body, date_timestamp) VALUES
(1, 1, 5, 'Increíble película', 'Esta película es simplemente increíble. La trama es cautivadora y los efectos especiales son impresionantes. Definitivamente la recomendaría a cualquiera.', '2024-05-01 12:30:00'),
(1, 2, 4, 'Buena película, pero...', 'La película es buena en general, pero creo que la trama podría haber sido un poco más desarrollada. Aun así, vale la pena verla.', '2024-05-02 15:45:00'),
(2, 3, 3, 'Meh', 'No me impresionó mucho esta película. La actuación fue decente, pero la trama era predecible. No la volvería a ver.', '2024-05-03 18:00:00'),
(2, 1, 5, '¡Una obra maestra!', '¡Esta película es una obra maestra! La actuación, la dirección, la música, todo es simplemente perfecto. Definitivamente la mejor película que he visto en años.', '2024-05-04 20:15:00'),
(3, 2, 4, 'Entretenida', 'Una película muy entretenida. La trama es interesante y los personajes están bien desarrollados. Recomendaría verla en el cine.', '2024-05-05 10:00:00'),
(1, 3, 3, 'Podría ser mejor', 'La película tiene algunos buenos momentos, pero en general, la trama se siente un poco forzada. Los efectos especiales son decentes, pero podrían mejorar.', '2024-05-06 14:20:00'),
(2, 1, 4, 'Recomendada', 'Me gustó mucho esta película. La historia es original y los actores hacen un buen trabajo interpretando a sus personajes. Definitivamente la recomendaría.', '2024-05-07 16:45:00'),
(3, 2, 2, 'Decepcionante', 'No cumplió con mis expectativas. La trama es confusa y los personajes son poco interesantes. No la recomendaría.', '2024-05-08 19:00:00'),
(1, 3, 5, '¡Increíble!', 'Una de las mejores películas que he visto en mucho tiempo. La trama es emocionante y los efectos especiales son alucinantes. Definitivamente la vería de nuevo.', '2024-05-09 21:30:00'),
(2, 1, 3, 'Pasable', 'La película es pasable. No es mala, pero tampoco es excepcional. Puede ser entretenida para ver en una tarde aburrida.', '2024-05-10 11:10:00'),
(3, 2, 4, 'Interesante', 'Una película interesante con una trama intrigante. Los actores hacen un buen trabajo y la dirección es sólida. La recomendaría a quienes disfrutan de los misterios.', '2024-05-11 13:40:00'),
(1, 3, 2, 'No recomendada', 'No me gustó esta película en absoluto. La trama es confusa y los efectos especiales son malos. No la recomendaría a nadie.', '2024-05-12 17:20:00'),
(2, 1, 5, '¡Impresionante!', 'Esta película es simplemente impresionante. La trama es emocionante y los giros son impredecibles. Definitivamente una de mis favoritas.', '2024-05-13 20:00:00'),
(3, 2, 4, 'Muy buena', 'Una película muy buena con una trama interesante y personajes bien desarrollados. La recomendaría a cualquiera que disfrute del suspense.', '2024-05-14 22:15:00'),
(1, 3, 3, 'Mediocre', 'La película es mediocre en el mejor de los casos. La trama es aburrida y los personajes son unidimensionales. No la recomendaría.', '2024-05-15 14:30:00'),
(2, 1, 4, 'Recomendable', 'Una película muy recomendable. La trama es intrigante y los actores hacen un excelente trabajo. Definitivamente vale la pena verla.', '2024-05-16 16:45:00'),
(3, 2, 2, 'Aburrida', 'Esta película es aburrida. La trama es predecible y los personajes son cliché. No la recomendaría a nadie.', '2024-05-17 19:00:00'),
(1, 3, 5, '¡Maravillosa!', 'Una maravillosa película. La trama es conmovedora y los personajes son entrañables. Definitivamente una joya del cine.', '2024-05-18 21:30:00'),
(2, 1, 3, 'Regular', 'La película es regular. No es mala, pero tampoco es excepcional. La trama es predecible y los efectos especiales son básicos.', '2024-05-19 11:10:00'),
(3, 2, 4, 'Divertida', 'Una película divertida con una trama ligera pero entretenida. Los actores hacen un buen trabajo y la dirección es sólida. Recomendada para una tarde relajada.', '2024-05-20 13:40:00'),
(1, 3, 2, 'Decepcionante', 'Me decepcionó esta película. La trama es confusa y los personajes son poco interesantes. No la recomendaría.', '2024-05-21 17:20:00'),
(2, 1, 5, '¡Fantástica!', 'Una película fantástica con una trama emocionante y personajes bien desarrollados. Los efectos especiales son impresionantes. Definitivamente la recomendaría.', '2024-05-22 20:00:00'),
(3, 2, 4, 'Sólida', 'Una película sólida con una trama intrigante y giros inesperados. Los actores hacen un buen trabajo y la dirección es sólida. Recomendada para los amantes del suspense.', '2024-05-23 22:15:00'),
(1, 3, 3, 'Meh', 'No me impresionó mucho esta película. La trama es predecible y los efectos especiales son básicos. No la recomendaría.', '2024-05-24 14:30:00'),
(2, 1, 4, 'Interesante', 'Una película interesante con una trama intrigante y personajes bien desarrollados. La recomendaría a quienes disfrutan del suspense.', '2024-05-25 16:45:00'),
(3, 2, 2, 'Aburrida', 'La película es aburrida. La trama es confusa y los personajes son poco interesantes. No la recomendaría a nadie.', '2024-05-26 19:00:00'),
(1, 3, 5, '¡Genial!', 'Una película genial con una trama emocionante y giros inesperados. Los actores hacen un excelente trabajo y los efectos especiales son impresionantes. Definitivamente vale la pena verla.', '2024-05-27 21:30:00'),
(2, 1, 3, 'Regular', 'La película es regular. La trama es predecible y los personajes son cliché. No la recomendaría.', '2024-05-28 11:10:00'),
(3, 2, 4, 'Buen entretenimiento', 'Una buena película para entretenerse. La trama es interesante y los personajes son carismáticos. Recomendada para una noche relajada en casa.', '2024-05-29 13:40:00'),
(1, 3, 2, 'Decepcionante', 'Me decepcionó esta película. La trama es confusa y los efectos especiales son malos. No la recomendaría.', '2024-05-30 17:20:00'),
(2, 1, 5, '¡Increíble!', 'Una película increíble con una trama emocionante y giros inesperados. Los actores hacen un excelente trabajo y los efectos especiales son impresionantes. Definitivamente vale la pena verla.', '2024-05-31 20:00:00'),
(3, 2, 4, 'Recomendable', 'Una película muy recomendable. La trama es intrigante y los personajes son carismáticos. Definitivamente vale la pena verla.', '2024-06-01 22:15:00'),
(1, 3, 3, 'Mediocre', 'La película es mediocre en el mejor de los casos. La trama es aburrida y los personajes son unidimensionales. No la recomendaría.', '2024-06-02 14:30:00'),
(2, 1, 4, 'Excelente', 'Una película excelente con una trama intrigante y personajes bien desarrollados. La recomendaría a quienes disfrutan del suspense.', '2024-06-03 16:45:00'),
(3, 2, 2, 'Pésima', 'Me pareció pésima esta película. La trama es confusa y los efectos especiales son malos. No la recomendaría a nadie.', '2024-06-04 19:00:00'),
(1, 3, 5, '¡Fantástica!', 'Una película fantástica con una trama emocionante y giros inesperados. Los actores hacen un excelente trabajo y los efectos especiales son impresionantes. Definitivamente vale la pena verla.', '2024-06-05 21:30:00'),
(2, 1, 3, 'Regular', 'La película es regular. No es mala, pero tampoco es excepcional. La trama es predecible y los efectos especiales son básicos.', '2024-06-06 11:10:00'),
(3, 2, 4, 'Interesante', 'Una película interesante con una trama intrigante y personajes bien desarrollados. La recomendaría a quienes disfrutan del suspense.', '2024-06-07 13:40:00'),
(1, 3, 2, 'Aburrida', 'La película es aburrida. La trama es confusa y los personajes son poco interesantes. No la recomendaría a nadie.', '2024-06-08 17:20:00'),
(2, 1, 5, '¡Genial!', 'Una película genial con una trama emocionante y giros inesperados. Los actores hacen un excelente trabajo y los efectos especiales son impresionantes. Definitivamente vale la pena verla.', '2024-06-09 20:00:00'),
(3, 2, 4, 'Recomendable', 'Una película muy recomendable. La trama es intrigante y los personajes son carismáticos. Definitivamente vale la pena verla.', '2024-06-10 22:15:00'),
(1, 3, 3, 'Mediocre', 'La película es mediocre en el mejor de los casos. La trama es aburrida y los personajes son unidimensionales. No la recomendaría.', '2024-06-11 14:30:00'),
(2, 1, 4, 'Excelente', 'Una película excelente con una trama intrigante y personajes bien desarrollados. La recomendaría a quienes disfrutan del suspense.', '2024-06-12 16:45:00'),
(3, 2, 2, 'Pésima', 'Me pareció pésima esta película. La trama es confusa y los efectos especiales son malos. No la recomendaría a nadie.', '2024-06-13 19:00:00'),
(1, 3, 5, '¡Fantástica!', 'Una película fantástica con una trama emocionante y giros inesperados. Los actores hacen un excelente trabajo y los efectos especiales son impresionantes. Definitivamente vale la pena verla.', '2024-06-14 21:30:00'),
(2, 1, 3, 'Regular', 'La película es regular. No es mala, pero tampoco es excepcional. La trama es predecible y los efectos especiales son básicos.', '2024-06-15 11:10:00'),
(3, 2, 4, 'Interesante', 'Una película interesante con una trama intrigante y personajes bien desarrollados. La recomendaría a quienes disfrutan del suspense.', '2024-06-16 13:40:00'),
(1, 3, 2, 'Aburrida', 'La película es aburrida. La trama es confusa y los personajes son poco interesantes. No la recomendaría a nadie.', '2024-06-17 17:20:00'),
(2, 2, 5, '¡Genial!', 'Una película genial con una trama emocionante y giros inesperados. Los actores hacen un excelente trabajo y los efectos especiales son impresionantes. Definitivamente vale la pena verla.', '2024-06-18 20:00:00'),
(3, 3, 4, 'Recomendable', 'Una película muy recomendable. La trama es intrigante y los personajes son carismáticos. Definitivamente vale la pena verla.', '2024-06-19 22:15:00');


-- Pensar como sería la implementación para el restos de tablas

-- create table playback_history(
-- playback_id int auto_increment not null primary key,
-- user_id int not null,
-- imdb_id varchar(50) not null,
-- date_timestamp datetime not null,
-- foreign key (imdb_id) references movie (imdb_id),
-- foreign key (user_id) references user_client (user_id)
-- );

-- create table playlist(
-- user_id int not null,
-- imdb_id varchar(50) not null,
-- name_playlist varchar(50) not null,
-- date_timestamp datetime not null,
-- foreign key (imdb_id) references movie (imdb_id),
-- foreign key (user_id) references user_client (user_id)
-- );


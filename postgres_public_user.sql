create table "user"
(
    id_user  integer not null
        constraint "User_pkey"
            primary key,
    email    varchar(255),
    password varchar(30)
)
    inherits (role);

alter table "user"
    owner to postgres;

INSERT INTO public."user" (id_role, id_user, email, password, role) VALUES (2, 2, 'jacek@gmail.pl', '123456', 'User');
INSERT INTO public."user" (id_role, id_user, email, password, role) VALUES (1, 1, 'piotr@flamingo.pl', '123456', 'Administrator');
INSERT INTO public."user" (id_role, id_user, email, password, role) VALUES (2, 3, 'kasia@gmail.com', 'kasia123', 'User');
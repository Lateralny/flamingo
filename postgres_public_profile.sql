create table profile
(
    id_profile   integer not null
        constraint profile_pkey
            primary key,
    nickname     varchar(20),
    profile_info varchar(255),
    country      varchar(255)
)
    inherits ("user");

alter table profile
    owner to postgres;

INSERT INTO public.profile (id_role, id_user, email, password, id_profile, nickname, profile_info, country, role) VALUES (2, 2, 'jacek@gmail.pl', '123456', 2, 'jacek1', '', 'Poland', 'User');
INSERT INTO public.profile (id_role, id_user, email, password, id_profile, nickname, profile_info, country, role) VALUES (1, 1, 'piotr@flamingo.pl', '123456', 1, 'piotr', '', 'Poland', 'Administrator');
INSERT INTO public.profile (id_role, id_user, email, password, id_profile, nickname, profile_info, country, role) VALUES (2, 3, 'kasia@gmail.com', 'kasia123', 3, 'kasia', null, 'Poland', 'User');
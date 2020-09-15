create table users_session
(
    id_ses  serial not null
        constraint users_session_pk
            primary key,
    user_id integer,
    hash    varchar(50)
);

alter table users_session
    owner to postgres;


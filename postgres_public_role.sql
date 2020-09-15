create table role
(
    id_role integer not null
        constraint role_pkey
            primary key,
    role    varchar(15)
);

comment on table role is 'user role';

alter table role
    owner to postgres;

INSERT INTO public.role (id_role, role) VALUES (1, 'Administrator');
INSERT INTO public.role (id_role, role) VALUES (2, 'User');
INSERT INTO public.role (id_role, role) VALUES (3, 'Sponsor');
INSERT INTO public.role (id_role, role) VALUES (2, 'User');
INSERT INTO public.role (id_role, role) VALUES (1, 'Administrator');
INSERT INTO public.role (id_role, role) VALUES (2, 'User');
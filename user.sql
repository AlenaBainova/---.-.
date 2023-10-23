create table user
(
    id       int auto_increment,
    login    varchar(255) null,
    password varchar(255) null,
    created_at timestamp not null default current_timestamp,
    constraint user_pk
        primary key (id)
);

create unique index user_login_uindex
    on user (login);
/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  26/07/2015 23:46:05                      */
/*==============================================================*/


drop table if exists Charge;

drop table if exists ChargeDirecte;

drop table if exists ChargeVehicule;

drop table if exists Encaissement;

drop table if exists Incident;

drop table if exists MotifDepenses;

drop table if exists PaiementCharge;

drop table if exists PaiementSalaire;

drop table if exists Personnel;

drop table if exists SemiRemorque;

drop table if exists SortieFond;

drop table if exists Transfert;

drop table if exists Tresorerie;

drop table if exists Vehicule;

drop table if exists Voyage;

drop table if exists VoyagePersonnel;

/*==============================================================*/
/* Table : Charge                                               */
/*==============================================================*/
create table Charge
(
   id                   int not null,
   Mot_id               int not null,
   dateOpe              int,
   montant              int,
   description          int,
   primary key (id)
);

/*==============================================================*/
/* Table : ChargeDirecte                                        */
/*==============================================================*/
create table ChargeDirecte
(
   Cha_id               int not null,
   Voy_id               int not null,
   libelle              int,
   primary key (Cha_id)
);

/*==============================================================*/
/* Table : ChargeVehicule                                       */
/*==============================================================*/
create table ChargeVehicule
(
   Cha_id               int not null,
   Veh_id               int not null,
   dateExpiration       datetime,
   expire               bool,
   primary key (Cha_id)
);

/*==============================================================*/
/* Table : Encaissement                                         */
/*==============================================================*/
create table Encaissement
(
   id                   int not null,
   Tre_id               int not null,
   Voy_id               int not null,
   description          varchar(254),
   dateEncaissement     datetime,
   montant              numeric(8,0),
   primary key (id)
);

/*==============================================================*/
/* Table : Incident                                             */
/*==============================================================*/
create table Incident
(
   id                   int not null,
   Voy_id               int not null,
   description          varchar(254),
   dateSurvenance       datetime,
   primary key (id)
);

/*==============================================================*/
/* Table : MotifDepenses                                        */
/*==============================================================*/
create table MotifDepenses
(
   id                   int not null,
   libelle              varchar(254),
   type                 varchar(254),
   expire               bool,
   duree                int,
   montant              numeric(8,0),
   primary key (id)
);

/*==============================================================*/
/* Table : PaiementCharge                                       */
/*==============================================================*/
create table PaiementCharge
(
   id                   int not null,
   Tre_id               int not null,
   Cha_id               int not null,
   datePaiement         int,
   description          int,
   montant              int,
   primary key (id)
);

/*==============================================================*/
/* Table : PaiementSalaire                                      */
/*==============================================================*/
create table PaiementSalaire
(
   id                   int not null,
   Per_id               int not null,
   Tre_id               int not null,
   datePaiement         datetime,
   description          varchar(254),
   montant              numeric(8,0),
   primary key (id)
);

/*==============================================================*/
/* Table : Personnel                                            */
/*==============================================================*/
create table Personnel
(
   id                   int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   dateNais             datetime,
   lieuNais             varchar(254),
   cni                  varchar(254),
   dateDel              datetime,
   lieuDel              varchar(254),
   telephone            varchar(254),
   email                varchar(254),
   fonction             varchar(254),
   salaire              numeric(8,0),
   primary key (id)
);

/*==============================================================*/
/* Table : SemiRemorque                                         */
/*==============================================================*/
create table SemiRemorque
(
   id                   int not null,
   Tracteur_id          int not null,
   Remorque_id          int not null,
   dateCreation         datetime,
   etat                 varchar(254),
   dateDissociation     datetime,
   description          varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : SortieFond                                           */
/*==============================================================*/
create table SortieFond
(
   id                   int not null,
   Tre_id               int not null,
   dateOpe              datetime,
   montant              numeric(8,0),
   desscription         varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : Transfert                                            */
/*==============================================================*/
create table Transfert
(
   id                   int not null,
   Tre_id               int not null,
   Tre_id2              int not null,
   dateOpe              datetime,
   montant              numeric(8,0),
   description          varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : Tresorerie                                           */
/*==============================================================*/
create table Tresorerie
(
   id                   int not null,
   reference            varchar(254),
   libelle              varchar(254),
   solde                numeric(8,0),
   primary key (id)
);

/*==============================================================*/
/* Table : Vehicule                                             */
/*==============================================================*/
create table Vehicule
(
   id                   int not null,
   description          varchar(254),
   immatriculation      varchar(254),
   dateAchat            datetime,
   valeur               numeric(8,0),
   primary key (id)
);

/*==============================================================*/
/* Table : Voyage                                               */
/*==============================================================*/
create table Voyage
(
   id                   int not null,
   Sem_id               int not null,
   dateDepart           datetime,
   dateArrive           datetime,
   dateRetour           datetime,
   villeArrive          varchar(254),
   marchandises         varchar(254),
   montant              numeric(8,0),
   etat                 varchar(254),
   observations         varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : VoyagePersonnel                                      */
/*==============================================================*/
create table VoyagePersonnel
(
   id                   int not null,
   Voy_id               int not null,
   Per_id               int not null,
   fraisDeRoute         numeric(8,0),
   fonction             varchar(254),
   note                 numeric(8,0),
   observation          varchar(254),
   primary key (id)
);

alter table Charge add constraint FK_motif_charge foreign key (Mot_id)
      references MotifDepenses (id) on delete restrict on update restrict;

alter table ChargeDirecte add constraint FK_Generalisation_2 foreign key (Cha_id)
      references Charge (id) on delete restrict on update restrict;

alter table ChargeDirecte add constraint FK_chargesVoyage foreign key (Voy_id)
      references Voyage (id) on delete restrict on update restrict;

alter table ChargeVehicule add constraint FK_Generalisation_1 foreign key (Cha_id)
      references Charge (id) on delete restrict on update restrict;

alter table ChargeVehicule add constraint FK_chargeVehicule foreign key (Veh_id)
      references Vehicule (id) on delete restrict on update restrict;

alter table Encaissement add constraint FK_EncaissementTresorerie foreign key (Tre_id)
      references Tresorerie (id) on delete restrict on update restrict;

alter table Encaissement add constraint FK_Encaissement_Voyage foreign key (Voy_id)
      references Voyage (id) on delete restrict on update restrict;

alter table Incident add constraint FK_Incidentvoyage foreign key (Voy_id)
      references Voyage (id) on delete restrict on update restrict;

alter table PaiementCharge add constraint FK_PaiementTresorerie foreign key (Tre_id)
      references Tresorerie (id) on delete restrict on update restrict;

alter table PaiementCharge add constraint FK_paiement_Charge foreign key (Cha_id)
      references Charge (id) on delete restrict on update restrict;

alter table PaiementSalaire add constraint FK_PaiementSalaireTresorerie foreign key (Tre_id)
      references Tresorerie (id) on delete restrict on update restrict;

alter table PaiementSalaire add constraint FK_Salaire_Personnel foreign key (Per_id)
      references Personnel (id) on delete restrict on update restrict;

alter table SemiRemorque add constraint FK_Remorque foreign key (Tracteur_id)
      references Vehicule (id) on delete restrict on update restrict;

alter table SemiRemorque add constraint FK_Tacteur foreign key (Remorque_id)
      references Vehicule (id) on delete restrict on update restrict;

alter table SortieFond add constraint FK_Caisse foreign key (Tre_id)
      references Tresorerie (id) on delete restrict on update restrict;

alter table Transfert add constraint FK_Emetteur foreign key (Tre_id)
      references Tresorerie (id) on delete restrict on update restrict;

alter table Transfert add constraint FK_Recepteur foreign key (Tre_id2)
      references Tresorerie (id) on delete restrict on update restrict;

alter table Voyage add constraint FK_VoyageSemiremorque foreign key (Sem_id)
      references SemiRemorque (id) on delete restrict on update restrict;

alter table VoyagePersonnel add constraint FK_Voyage_Personnel_1 foreign key (Voy_id)
      references Voyage (id) on delete restrict on update restrict;

alter table VoyagePersonnel add constraint FK_Voyage_Personnel_2 foreign key (Per_id)
      references Personnel (id) on delete restrict on update restrict;


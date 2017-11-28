CREATE TABLE tx_chftime_domain_model_dateranges (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    label varchar(255) DEFAULT '' NOT NULL,
    dating_from varchar(50) DEFAULT '' NOT NULL,
    precision_from varchar(255) DEFAULT '' NOT NULL,
    dating_to varchar(50) DEFAULT '' NOT NULL,
    precision_to varchar(255) DEFAULT '' NOT NULL,
    dating_point varchar(255) DEFAULT '' NOT NULL,
    method varchar(255) DEFAULT '' NOT NULL,
    certainty int(11) unsigned DEFAULT '0' NOT NULL,
    duration varchar(255) DEFAULT '' NOT NULL,
    calendar varchar(255) DEFAULT '' NOT NULL,
    period varchar(255) DEFAULT '' NOT NULL,

    # generic 1:1 parent relation to any other table/field
    parent int(11) unsigned DEFAULT '0' NOT NULL,
    tablename varchar(255) DEFAULT '' NOT NULL,
    fieldname varchar(255) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

    t3_origuid int(11) DEFAULT '0' NOT NULL,
    t3ver_oid int(11) DEFAULT '0' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,

    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,

    PRIMARY KEY (uid),
    KEY pid (pid),
    KEY t3ver_oid (t3ver_oid,t3ver_wsid),

    KEY parent (parent),
    KEY tablename (tablename),
    KEY fieldname (fieldname),
    KEY dateranges_start_end (dating_from,dating_to),
    KEY dateranges_end_start (dating_to,dating_from)

) ENGINE=InnoDB;

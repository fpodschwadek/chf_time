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

    # generic 1:1 parent relation to any other table/field
    parent int(11) unsigned DEFAULT '0' NOT NULL,
    tablename varchar(255) DEFAULT '' NOT NULL,
    fieldname varchar(255) DEFAULT '' NOT NULL,

    # tx_chftime_domain_model_temporal_entity (1:1)
    temporal_entity int(11) unsigned DEFAULT '0',

    # tx_chftime_domain_model_temporal_calendar (1:1)
    calendar int(11) unsigned DEFAULT '0',

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
    KEY dateranges_end_start (dating_to,dating_from),
    KEY temporal_entity (temporal_entity),
    KEY calendar (calendar)

) ENGINE=InnoDB;

CREATE TABLE tx_chftime_domain_model_temporal_entity (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    persistent_identifier varchar(255) DEFAULT '' NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,
    name_variants text NOT NULL,
    type int(11) DEFAULT '0' NOT NULL,
    source varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,

    # tx_chftime_domain_model_temporal_entity (1:1)
    parent int(11) unsigned DEFAULT '0' NOT NULL,

    # tx_chftime_domain_model_dateranges (1:1)
    date_range int(11) unsigned DEFAULT '0',

    # tx_chfgeo_domain_model_toponym (1:1)
    spatial_extent int(11) unsigned DEFAULT '0',

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

    KEY persistent_identifier (persistent_identifier),
    KEY name (name),
    KEY parent (parent),
    KEY date_range (date_range),
    KEY spatial_extent (spatial_extent)

) ENGINE=InnoDB;

CREATE TABLE tx_chftime_domain_model_calendar (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    persistent_identifier varchar(255) DEFAULT '' NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,
    name_variants text NOT NULL,
    description text NOT NULL,

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

    KEY persistent_identifier (persistent_identifier),
    KEY name (name)

) ENGINE=InnoDB;

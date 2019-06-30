<?php

$previous = require __DIR__ . '/server_5.5.php';

$new = [
	[
		"code"      => 1021,
		"symbol"    => "ER_DISK_FULL",
		"sql_state" => "HY000",
		"template"  => "Disk full ({#p1}); waiting for someone to free some space... (errno: {p2} - {#p3})",
	],
	[
		"code"      => 1118,
		"symbol"    => "ER_TOO_BIG_ROWSIZE",
		"sql_state" => "42000",
		"template"  => "Row size too large. The maximum row size for the used table type, not counting BLOBs, is {p1}. This includes storage overhead, check the manual. You have to change some columns to TEXT or BLOBs",
	],
	[
		"code"      => 1315,
		"symbol"    => "ER_UPDATE_LOG_DEPRECATED_IGNORED",
		"sql_state" => "42000",
		"template"  => "The update log is deprecated and replaced by the binary log; SET SQL_LOG_UPDATE has been ignored.",
	],
	[
		"code"      => 1316,
		"symbol"    => "ER_UPDATE_LOG_DEPRECATED_TRANSLATED",
		"sql_state" => "42000",
		"template"  => "The update log is deprecated and replaced by the binary log; SET SQL_LOG_UPDATE has been translated to SET SQL_LOG_BIN.",
	],
	[
		"code"      => 1568,
		"symbol"    => "ER_CANT_CHANGE_TX_CHARACTERISTICS",
		"sql_state" => "25001",
		"template"  => "Transaction characteristics can't be changed while a transaction is in progress",
	],
	[
		"code"      => 1589,
		"symbol"    => "ER_EVENT_CANNOT_ALTER_IN_THE_PAST",
		"sql_state" => "HY000",
		"template"  => "Event execution time is in the past and ON COMPLETION NOT PRESERVE is set. The event was not changed. Specify a time in the future.",
	],
	[
		"code"      => 1721,
		"symbol"    => "ER_CANT_LOCK_RPL_INFO_TABLE",
		"sql_state" => "HY000",
		"template"  => "You can't use locks with rpl info tables.",
	],
	[
		"code"      => 1728,
		"symbol"    => "ER_CANNOT_LOAD_FROM_TABLE_V2",
		"sql_state" => "HY000",
		"template"  => "Cannot load from {#p1}.{#p2}. The table is probably corrupted",
	],
	[
		"code"      => 1729,
		"symbol"    => "ER_MASTER_DELAY_VALUE_OUT_OF_RANGE",
		"sql_state" => "HY000",
		"template"  => "The requested value {#p1} for the master delay exceeds the maximum {p2}",
	],
	[
		"code"      => 1730,
		"symbol"    => "ER_ONLY_FD_AND_RBR_EVENTS_ALLOWED_IN_BINLOG_STATEMENT",
		"sql_state" => "HY000",
		"template"  => "Only Format_description_log_event and row events are allowed in BINLOG statements (but {#p1} was provided)",
	],
	[
		"code"      => 1731,
		"symbol"    => "ER_PARTITION_EXCHANGE_DIFFERENT_OPTION",
		"sql_state" => "HY000",
		"template"  => "Non matching attribute '{#p1}' between partition and table",
	],
	[
		"code"      => 1732,
		"symbol"    => "ER_PARTITION_EXCHANGE_PART_TABLE",
		"sql_state" => "HY000",
		"template"  => "Table to exchange with partition is partitioned: '{#p1}'",
	],
	[
		"code"      => 1733,
		"symbol"    => "ER_PARTITION_EXCHANGE_TEMP_TABLE",
		"sql_state" => "HY000",
		"template"  => "Table to exchange with partition is temporary: '{#p1}'",
	],
	[
		"code"      => 1734,
		"symbol"    => "ER_PARTITION_INSTEAD_OF_SUBPARTITION",
		"sql_state" => "HY000",
		"template"  => "Subpartitioned table, use subpartition instead of partition",
	],
	[
		"code"      => 1735,
		"symbol"    => "ER_UNKNOWN_PARTITION",
		"sql_state" => "HY000",
		"template"  => "Unknown partition '{#p1}' in table '{#p2}'",
	],
	[
		"code"      => 1736,
		"symbol"    => "ER_TABLES_DIFFERENT_METADATA",
		"sql_state" => "HY000",
		"template"  => "Tables have different definitions",
	],
	[
		"code"      => 1737,
		"symbol"    => "ER_ROW_DOES_NOT_MATCH_PARTITION",
		"sql_state" => "HY000",
		"template"  => "Found a row that does not match the partition",
	],
	[
		"code"      => 1738,
		"symbol"    => "ER_BINLOG_CACHE_SIZE_GREATER_THAN_MAX",
		"sql_state" => "HY000",
		"template"  => "Option binlog_cache_size ({p1}) is greater than max_binlog_cache_size ({p2}); setting binlog_cache_size equal to max_binlog_cache_size.",
	],
	[
		"code"      => 1739,
		"symbol"    => "ER_WARN_INDEX_NOT_APPLICABLE",
		"sql_state" => "HY000",
		"template"  => "Cannot use {#p1} access on index '{#p2}' due to type or collation conversion on field '{#p3}'",
	],
	[
		"code"      => 1740,
		"symbol"    => "ER_PARTITION_EXCHANGE_FOREIGN_KEY",
		"sql_state" => "HY000",
		"template"  => "Table to exchange with partition has foreign key references: '{#p1}'",
	],
	[
		"code"      => 1741,
		"symbol"    => "ER_NO_SUCH_KEY_VALUE",
		"sql_state" => "HY000",
		"template"  => "Key value '{#p1}' was not found in table '{#p2}.{#p3}'",
	],
	[
		"code"      => 1743,
		"symbol"    => "ER_NETWORK_READ_EVENT_CHECKSUM_FAILURE",
		"sql_state" => "HY000",
		"template"  => "Replication event checksum verification failed while reading from network.",
	],
	[
		"code"      => 1744,
		"symbol"    => "ER_BINLOG_READ_EVENT_CHECKSUM_FAILURE",
		"sql_state" => "HY000",
		"template"  => "Replication event checksum verification failed while reading from a log file.",
	],
	[
		"code"      => 1745,
		"symbol"    => "ER_BINLOG_STMT_CACHE_SIZE_GREATER_THAN_MAX",
		"sql_state" => "HY000",
		"template"  => "Option binlog_stmt_cache_size ({p1}) is greater than max_binlog_stmt_cache_size ({p2}); setting binlog_stmt_cache_size equal to max_binlog_stmt_cache_size.",
	],
	[
		"code"      => 1746,
		"symbol"    => "ER_NO_SUCH_PARTITION",
		"sql_state" => "HY000",
		"template"  => "partition '{#p1}' doesn't exist",
	],
	[
		"code"      => 1746,
		"symbol"    => "ER_CANT_UPDATE_TABLE_IN_CREATE_TABLE_SELECT",
		"sql_state" => "HY000",
		"template"  => "Can't update table '{#p1}' while '{#p2}' is being created.",
	],
	[
		"code"      => 1747,
		"symbol"    => "ER_PARTITION_CLAUSE_ON_NONPARTITIONED",
		"sql_state" => "HY000",
		"template"  => "PARTITION () clause on non partitioned table",
	],
	[
		"code"      => 1748,
		"symbol"    => "ER_ROW_DOES_NOT_MATCH_GIVEN_PARTITION_SET",
		"sql_state" => "HY000",
		"template"  => "Found a row not matching the given partition set",
	],
	[
		"code"      => 1749,
		"symbol"    => "ER_NO_SUCH_PARTITION__UNUSED",
		"sql_state" => "HY000",
		"template"  => "partition '{#p1}' doesn't exist",
	],
	[
		"code"      => 1750,
		"symbol"    => "ER_CHANGE_RPL_INFO_REPOSITORY_FAILURE",
		"sql_state" => "HY000",
		"template"  => "Failure while changing the type of replication repository: {#p1}.",
	],
	[
		"code"      => 1751,
		"symbol"    => "ER_WARNING_NOT_COMPLETE_ROLLBACK_WITH_CREATED_TEMP_TABLE",
		"sql_state" => "HY000",
		"template"  => "The creation of some temporary tables could not be rolled back.",
	],
	[
		"code"      => 1752,
		"symbol"    => "ER_WARNING_NOT_COMPLETE_ROLLBACK_WITH_DROPPED_TEMP_TABLE",
		"sql_state" => "HY000",
		"template"  => "Some temporary tables were dropped, but these operations could not be rolled back.",
	],
	[
		"code"      => 1754,
		"symbol"    => "ER_MTS_UPDATED_DBS_GREATER_MAX",
		"sql_state" => "HY000",
		"template"  => "The number of modified databases exceeds the maximum {p1}; the database names will not be included in the replication event metadata.",
	],
	[
		"code"      => 1755,
		"symbol"    => "ER_MTS_CANT_PARALLEL",
		"sql_state" => "HY000",
		"template"  => "Cannot execute the current event group in the parallel mode. Encountered event {#p1}, relay-log name {#p2}, position {#p3} which prevents execution of this event group in parallel mode. Reason: {#p4}.",
	],
	[
		"code"      => 1757,
		"symbol"    => "ER_FULLTEXT_NOT_SUPPORTED_WITH_PARTITIONING",
		"sql_state" => "HY000",
		"template"  => "FULLTEXT index is not supported for partitioned tables.",
	],
	[
		"code"      => 1758,
		"symbol"    => "ER_DA_INVALID_CONDITION_NUMBER",
		"sql_state" => "35000",
		"template"  => "Invalid condition number",
	],
	[
		"code"      => 1759,
		"symbol"    => "ER_INSECURE_PLAIN_TEXT",
		"sql_state" => "HY000",
		"template"  => "Sending passwords in plain text without SSL/TLS is extremely insecure.",
	],
	[
		"code"      => 1760,
		"symbol"    => "ER_INSECURE_CHANGE_MASTER",
		"sql_state" => "HY000",
		"template"  => "Storing MySQL user name or password information in the master info repository is not secure and is therefore not recommended. Please consider using the USER and PASSWORD connection options for START SLAVE; see the 'START SLAVE Syntax' in the MySQL Manual for more information.",
	],
	[
		"code"      => 1761,
		"symbol"    => "ER_FOREIGN_DUPLICATE_KEY_WITH_CHILD_INFO",
		"sql_state" => "23000",
		"template"  => "Foreign key constraint for table '{#p1}', record '{#p2}' would lead to a duplicate entry in table '{#p3}', key '{#p4}'",
	],
	[
		"code"      => 1762,
		"symbol"    => "ER_FOREIGN_DUPLICATE_KEY_WITHOUT_CHILD_INFO",
		"sql_state" => "23000",
		"template"  => "Foreign key constraint for table '{#p1}', record '{#p2}' would lead to a duplicate entry in a child table",
	],
	[
		"code"      => 1763,
		"symbol"    => "ER_SQLTHREAD_WITH_SECURE_SLAVE",
		"sql_state" => "HY000",
		"template"  => "Setting authentication options is not possible when only the Slave SQL Thread is being started.",
	],
	[
		"code"      => 1764,
		"symbol"    => "ER_TABLE_HAS_NO_FT",
		"sql_state" => "HY000",
		"template"  => "The table does not have FULLTEXT index to support this query",
	],
	[
		"code"      => 1765,
		"symbol"    => "ER_VARIABLE_NOT_SETTABLE_IN_SF_OR_TRIGGER",
		"sql_state" => "HY000",
		"template"  => "The system variable {#p1} cannot be set in stored functions or triggers.",
	],
	[
		"code"      => 1766,
		"symbol"    => "ER_VARIABLE_NOT_SETTABLE_IN_TRANSACTION",
		"sql_state" => "HY000",
		"template"  => "The system variable {#p1} cannot be set when there is an ongoing transaction.",
	],
	[
		"code"      => 1767,
		"symbol"    => "ER_GTID_NEXT_IS_NOT_IN_GTID_NEXT_LIST",
		"sql_state" => "HY000",
		"template"  => "The system variable @@SESSION.GTID_NEXT has the value {#p1}, which is not listed in @@SESSION.GTID_NEXT_LIST.",
	],
	[
		"code"      => 1768,
		"symbol"    => "ER_CANT_CHANGE_GTID_NEXT_IN_TRANSACTION_WHEN_GTID_NEXT_LIST_IS_NULL",
		"sql_state" => "HY000",
		"template"  => "The system variable @@SESSION.GTID_NEXT cannot change inside a transaction.",
	],
	[
		"code"      => 1769,
		"symbol"    => "ER_SET_STATEMENT_CANNOT_INVOKE_FUNCTION",
		"sql_state" => "HY000",
		"template"  => "The statement 'SET {#p1}' cannot invoke a stored function.",
	],
	[
		"code"      => 1770,
		"symbol"    => "ER_GTID_NEXT_CANT_BE_AUTOMATIC_IF_GTID_NEXT_LIST_IS_NON_NULL",
		"sql_state" => "HY000",
		"template"  => "The system variable @@SESSION.GTID_NEXT cannot be 'AUTOMATIC' when @@SESSION.GTID_NEXT_LIST is non-NULL.",
	],
	[
		"code"      => 1771,
		"symbol"    => "ER_SKIPPING_LOGGED_TRANSACTION",
		"sql_state" => "HY000",
		"template"  => "Skipping transaction {#p1} because it has already been executed and logged.",
	],
	[
		"code"      => 1772,
		"symbol"    => "ER_MALFORMED_GTID_SET_SPECIFICATION",
		"sql_state" => "HY000",
		"template"  => "Malformed GTID set specification '{#p1}'.",
	],
	[
		"code"      => 1773,
		"symbol"    => "ER_MALFORMED_GTID_SET_ENCODING",
		"sql_state" => "HY000",
		"template"  => "Malformed GTID set encoding.",
	],
	[
		"code"      => 1774,
		"symbol"    => "ER_MALFORMED_GTID_SPECIFICATION",
		"sql_state" => "HY000",
		"template"  => "Malformed GTID specification '{#p1}'.",
	],
	[
		"code"      => 1775,
		"symbol"    => "ER_GNO_EXHAUSTED",
		"sql_state" => "HY000",
		"template"  => "Impossible to generate Global Transaction Identifier: the integer component reached the maximal value. Restart the server with a new server_uuid.",
	],
	[
		"code"      => 1776,
		"symbol"    => "ER_BAD_SLAVE_AUTO_POSITION",
		"sql_state" => "HY000",
		"template"  => "Parameters MASTER_LOG_FILE, MASTER_LOG_POS, RELAY_LOG_FILE and RELAY_LOG_POS cannot be set when MASTER_AUTO_POSITION is active.",
	],
	[
		"code"      => 1777,
		"symbol"    => "ER_AUTO_POSITION_REQUIRES_GTID_MODE_ON",
		"sql_state" => "HY000",
		"template"  => "CHANGE MASTER TO MASTER_AUTO_POSITION = 1 can only be executed when @@GLOBAL.GTID_MODE = ON.",
	],
	[
		"code"      => 1778,
		"symbol"    => "ER_CANT_DO_IMPLICIT_COMMIT_IN_TRX_WHEN_GTID_NEXT_IS_SET",
		"sql_state" => "HY000",
		"template"  => "Cannot execute statements with implicit commit inside a transaction when @@SESSION.GTID_NEXT != AUTOMATIC.",
	],
	[
		"code"      => 1779,
		"symbol"    => "ER_GTID_MODE_2_OR_3_REQUIRES_DISABLE_GTID_UNSAFE_STATEMENTS_ON",
		"sql_state" => "HY000",
		"template"  => "GTID_MODE = ON or GTID_MODE = UPGRADE_STEP_2 requires DISABLE_GTID_UNSAFE_STATEMENTS = 1.",
	],
	[
		"code"      => 1779,
		"symbol"    => "ER_GTID_MODE_2_OR_3_REQUIRES_ENFORCE_GTID_CONSISTENCY_ON",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_MODE = ON or UPGRADE_STEP_2 requires @@GLOBAL.ENFORCE_GTID_CONSISTENCY = 1.",
	],
	[
		"code"      => 1780,
		"symbol"    => "ER_GTID_MODE_REQUIRES_BINLOG",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_MODE = ON or UPGRADE_STEP_1 or UPGRADE_STEP_2 requires --log-bin and --log-slave-updates.",
	],
	[
		"code"      => 1781,
		"symbol"    => "ER_CANT_SET_GTID_NEXT_TO_GTID_WHEN_GTID_MODE_IS_OFF",
		"sql_state" => "HY000",
		"template"  => "@@SESSION.GTID_NEXT cannot be set to UUID:NUMBER when @@GLOBAL.GTID_MODE = OFF.",
	],
	[
		"code"      => 1782,
		"symbol"    => "ER_CANT_SET_GTID_NEXT_TO_ANONYMOUS_WHEN_GTID_MODE_IS_ON",
		"sql_state" => "HY000",
		"template"  => "@@SESSION.GTID_NEXT cannot be set to ANONYMOUS when @@GLOBAL.GTID_MODE = ON.",
	],
	[
		"code"      => 1783,
		"symbol"    => "ER_CANT_SET_GTID_NEXT_LIST_TO_NON_NULL_WHEN_GTID_MODE_IS_OFF",
		"sql_state" => "HY000",
		"template"  => "@@SESSION.GTID_NEXT_LIST cannot be set to a non-NULL value when @@GLOBAL.GTID_MODE = OFF.",
	],
	[
		"code"      => 1784,
		"symbol"    => "ER_FOUND_GTID_EVENT_WHEN_GTID_MODE_IS_OFF",
		"sql_state" => "HY000",
		"template"  => "Found a Gtid_log_event or Previous_gtids_log_event when @@GLOBAL.GTID_MODE = OFF.",
	],
	[
		"code"      => 1785,
		"symbol"    => "ER_GTID_UNSAFE_NON_TRANSACTIONAL_TABLE",
		"sql_state" => "HY000",
		"template"  => "When @@GLOBAL.ENFORCE_GTID_CONSISTENCY = 1, updates to non-transactional tables can only be done in either autocommitted statements or single-statement transactions, and never in the same statement as updates to transactional tables.",
	],
	[
		"code"      => 1786,
		"symbol"    => "ER_GTID_UNSAFE_CREATE_SELECT",
		"sql_state" => "HY000",
		"template"  => "CREATE TABLE ... SELECT is forbidden when @@GLOBAL.ENFORCE_GTID_CONSISTENCY = 1.",
	],
	[
		"code"      => 1787,
		"symbol"    => "ER_GTID_UNSAFE_CREATE_DROP_TEMPORARY_TABLE_IN_TRANSACTION",
		"sql_state" => "HY000",
		"template"  => "When @@GLOBAL.ENFORCE_GTID_CONSISTENCY = 1, the statements CREATE TEMPORARY TABLE and DROP TEMPORARY TABLE can be executed in a non-transactional context only, and require that AUTOCOMMIT = 1. These statements are also not allowed in a function or trigger because functions and triggers are also considered to be multi-statement transactions.",
	],
	[
		"code"      => 1788,
		"symbol"    => "ER_GTID_MODE_CAN_ONLY_CHANGE_ONE_STEP_AT_A_TIME",
		"sql_state" => "HY000",
		"template"  => "The value of @@GLOBAL.GTID_MODE can only change one step at a time: OFF <-> UPGRADE_STEP_1 <-> UPGRADE_STEP_2 <-> ON. Also note that this value must be stepped up or down simultaneously on all servers; see the Manual for instructions.",
	],
	[
		"code"      => 1789,
		"symbol"    => "ER_MASTER_HAS_PURGED_REQUIRED_GTIDS",
		"sql_state" => "HY000",
		"template"  => "The slave is connecting using CHANGE MASTER TO MASTER_AUTO_POSITION = 1, but the master has purged binary logs containing GTIDs that the slave requires.",
	],
	[
		"code"      => 1790,
		"symbol"    => "ER_CANT_SET_GTID_NEXT_WHEN_OWNING_GTID",
		"sql_state" => "HY000",
		"template"  => "@@SESSION.GTID_NEXT cannot be changed by a client that owns a GTID. The client owns {#p1}. Ownership is released on COMMIT or ROLLBACK.",
	],
	[
		"code"      => 1791,
		"symbol"    => "ER_UNKNOWN_EXPLAIN_FORMAT",
		"sql_state" => "HY000",
		"template"  => "Unknown EXPLAIN format name: '{#p1}'",
	],
	[
		"code"      => 1792,
		"symbol"    => "ER_CANT_EXECUTE_IN_READ_ONLY_TRANSACTION",
		"sql_state" => "25006",
		"template"  => "Cannot execute statement in a READ ONLY transaction.",
	],
	[
		"code"      => 1793,
		"symbol"    => "ER_TOO_LONG_TABLE_PARTITION_COMMENT",
		"sql_state" => "HY000",
		"template"  => "Comment for table partition '{#p1}' is too long (max = {p2})",
	],
	[
		"code"      => 1794,
		"symbol"    => "ER_SLAVE_CONFIGURATION",
		"sql_state" => "HY000",
		"template"  => "Slave is not configured or failed to initialize properly. You must at least set --server-id to enable either a master or a slave. Additional error messages can be found in the MySQL error log.",
	],
	[
		"code"      => 1795,
		"symbol"    => "ER_INNODB_FT_LIMIT",
		"sql_state" => "HY000",
		"template"  => "InnoDB presently supports one FULLTEXT index creation at a time",
	],
	[
		"code"      => 1796,
		"symbol"    => "ER_INNODB_NO_FT_TEMP_TABLE",
		"sql_state" => "HY000",
		"template"  => "Cannot create FULLTEXT index on temporary InnoDB table",
	],
	[
		"code"      => 1797,
		"symbol"    => "ER_INNODB_FT_WRONG_DOCID_COLUMN",
		"sql_state" => "HY000",
		"template"  => "Column '{#p1}' is of wrong type for an InnoDB FULLTEXT index",
	],
	[
		"code"      => 1798,
		"symbol"    => "ER_INNODB_FT_WRONG_DOCID_INDEX",
		"sql_state" => "HY000",
		"template"  => "Index '{#p1}' is of wrong type for an InnoDB FULLTEXT index",
	],
	[
		"code"      => 1799,
		"symbol"    => "ER_INNODB_ONLINE_LOG_TOO_BIG",
		"sql_state" => "HY000",
		"template"  => "Creating index '{#p1}' required more than 'innodb_online_alter_log_max_size' bytes of modification log. Please try again.",
	],
	[
		"code"      => 1800,
		"symbol"    => "ER_UNKNOWN_ALTER_ALGORITHM",
		"sql_state" => "HY000",
		"template"  => "Unknown ALGORITHM '{#p1}'",
	],
	[
		"code"      => 1801,
		"symbol"    => "ER_UNKNOWN_ALTER_LOCK",
		"sql_state" => "HY000",
		"template"  => "Unknown LOCK type '{#p1}'",
	],
	[
		"code"      => 1802,
		"symbol"    => "ER_MTS_CHANGE_MASTER_CANT_RUN_WITH_GAPS",
		"sql_state" => "HY000",
		"template"  => "CHANGE MASTER cannot be executed when the slave was stopped with an error or killed in MTS mode. Consider using RESET SLAVE or START SLAVE UNTIL.",
	],
	[
		"code"      => 1803,
		"symbol"    => "ER_MTS_RECOVERY_FAILURE",
		"sql_state" => "HY000",
		"template"  => "Cannot recover after SLAVE errored out in parallel execution mode. Additional error messages can be found in the MySQL error log.",
	],
	[
		"code"      => 1804,
		"symbol"    => "ER_MTS_RESET_WORKERS",
		"sql_state" => "HY000",
		"template"  => "Cannot clean up worker info tables. Additional error messages can be found in the MySQL error log.",
	],
	[
		"code"      => 1805,
		"symbol"    => "ER_COL_COUNT_DOESNT_MATCH_CORRUPTED_V2",
		"sql_state" => "HY000",
		"template"  => "Column count of {#p1}.{#p2} is wrong. Expected {p3}, found {p4}. The table is probably corrupted",
	],
	[
		"code"      => 1806,
		"symbol"    => "ER_SLAVE_SILENT_RETRY_TRANSACTION",
		"sql_state" => "HY000",
		"template"  => "Slave must silently retry current transaction",
	],
	[
		"code"      => 1807,
		"symbol"    => "ER_DISCARD_FK_CHECKS_RUNNING",
		"sql_state" => "HY000",
		"template"  => "There is a foreign key check running on table '{#p1}'. Cannot discard the table.",
	],
	[
		"code"      => 1808,
		"symbol"    => "ER_TABLE_SCHEMA_MISMATCH",
		"sql_state" => "HY000",
		"template"  => "Schema mismatch ({#p1})",
	],
	[
		"code"      => 1809,
		"symbol"    => "ER_TABLE_IN_SYSTEM_TABLESPACE",
		"sql_state" => "HY000",
		"template"  => "Table '{#p1}' in system tablespace",
	],
	[
		"code"      => 1810,
		"symbol"    => "ER_IO_READ_ERROR",
		"sql_state" => "HY000",
		"template"  => "IO Read error: ({p1}, {#p2}) {#p3}",
	],
	[
		"code"      => 1811,
		"symbol"    => "ER_IO_WRITE_ERROR",
		"sql_state" => "HY000",
		"template"  => "IO Write error: ({p1}, {#p2}) {#p3}",
	],
	[
		"code"      => 1812,
		"symbol"    => "ER_TABLESPACE_MISSING",
		"sql_state" => "HY000",
		"template"  => "Tablespace is missing for table '{#p1}'",
	],
	[
		"code"      => 1813,
		"symbol"    => "ER_TABLESPACE_EXISTS",
		"sql_state" => "HY000",
		"template"  => "Tablespace for table '{#p1}' exists. Please DISCARD the tablespace before IMPORT.",
	],
	[
		"code"      => 1814,
		"symbol"    => "ER_TABLESPACE_DISCARDED",
		"sql_state" => "HY000",
		"template"  => "Tablespace has been discarded for table '{#p1}'",
	],
	[
		"code"      => 1815,
		"symbol"    => "ER_INTERNAL_ERROR",
		"sql_state" => "HY000",
		"template"  => "Internal error: {#p1}",
	],
	[
		"code"      => 1816,
		"symbol"    => "ER_INNODB_IMPORT_ERROR",
		"sql_state" => "HY000",
		"template"  => "ALTER TABLE '{#p1}' IMPORT TABLESPACE failed with error {p2} : '{#p3}'",
	],
	[
		"code"      => 1817,
		"symbol"    => "ER_INNODB_INDEX_CORRUPT",
		"sql_state" => "HY000",
		"template"  => "Index corrupt: {#p1}",
	],
	[
		"code"      => 1818,
		"symbol"    => "ER_INVALID_YEAR_COLUMN_LENGTH",
		"sql_state" => "HY000",
		"template"  => "YEAR({p1}) column type is deprecated. Creating YEAR(4) column instead.",
	],
	[
		"code"      => 1819,
		"symbol"    => "ER_NOT_VALID_PASSWORD",
		"sql_state" => "HY000",
		"template"  => "Your password does not satisfy the current policy requirements",
	],
	[
		"code"      => 1820,
		"symbol"    => "ER_MUST_CHANGE_PASSWORD",
		"sql_state" => "HY000",
		"template"  => "You must SET PASSWORD before executing this statement",
	],
	[
		"code"      => 1821,
		"symbol"    => "ER_FK_NO_INDEX_CHILD",
		"sql_state" => "HY000",
		"template"  => "Failed to add the foreign key constaint. Missing index for constraint '{#p1}' in the foreign table '{#p2}'",
	],
	[
		"code"      => 1822,
		"symbol"    => "ER_FK_NO_INDEX_PARENT",
		"sql_state" => "HY000",
		"template"  => "Failed to add the foreign key constaint. Missing index for constraint '{#p1}' in the referenced table '{#p2}'",
	],
	[
		"code"      => 1823,
		"symbol"    => "ER_FK_FAIL_ADD_SYSTEM",
		"sql_state" => "HY000",
		"template"  => "Failed to add the foreign key constraint '{#p1}' to system tables",
	],
	[
		"code"      => 1824,
		"symbol"    => "ER_FK_CANNOT_OPEN_PARENT",
		"sql_state" => "HY000",
		"template"  => "Failed to open the referenced table '{#p1}'",
	],
	[
		"code"      => 1825,
		"symbol"    => "ER_FK_INCORRECT_OPTION",
		"sql_state" => "HY000",
		"template"  => "Failed to add the foreign key constraint on table '{#p1}'. Incorrect options in FOREIGN KEY constraint '{#p2}'",
	],
	[
		"code"      => 1826,
		"symbol"    => "ER_FK_DUP_NAME",
		"sql_state" => "HY000",
		"template"  => "Duplicate foreign key constraint name '{#p1}'",
	],
	[
		"code"      => 1827,
		"symbol"    => "ER_PASSWORD_FORMAT",
		"sql_state" => "HY000",
		"template"  => "The password hash doesn't have the expected format. Check if the correct password algorithm is being used with the PASSWORD() function.",
	],
	[
		"code"      => 1828,
		"symbol"    => "ER_FK_COLUMN_CANNOT_DROP",
		"sql_state" => "HY000",
		"template"  => "Cannot drop column '{#p1}': needed in a foreign key constraint '{#p2}'",
	],
	[
		"code"      => 1829,
		"symbol"    => "ER_FK_COLUMN_CANNOT_DROP_CHILD",
		"sql_state" => "HY000",
		"template"  => "Cannot drop column '{#p1}': needed in a foreign key constraint '{#p2}' of table '{#p3}'",
	],
	[
		"code"      => 1830,
		"symbol"    => "ER_FK_COLUMN_NOT_NULL",
		"sql_state" => "HY000",
		"template"  => "Column '{#p1}' cannot be NOT NULL: needed in a foreign key constraint '{#p2}' SET NULL",
	],
	[
		"code"      => 1831,
		"symbol"    => "ER_DUP_INDEX",
		"sql_state" => "HY000",
		"template"  => "Duplicate index '{#p1}' defined on the table '{#p2}.{#p3}'. This is deprecated and will be disallowed in a future release.",
	],
	[
		"code"      => 1832,
		"symbol"    => "ER_FK_COLUMN_CANNOT_CHANGE",
		"sql_state" => "HY000",
		"template"  => "Cannot change column '{#p1}': used in a foreign key constraint '{#p2}'",
	],
	[
		"code"      => 1833,
		"symbol"    => "ER_FK_COLUMN_CANNOT_CHANGE_CHILD",
		"sql_state" => "HY000",
		"template"  => "Cannot change column '{#p1}': used in a foreign key constraint '{#p2}' of table '{#p3}'",
	],
	[
		"code"      => 1834,
		"symbol"    => "ER_FK_CANNOT_DELETE_PARENT",
		"sql_state" => "HY000",
		"template"  => "Cannot delete rows from table which is parent in a foreign key constraint '{#p1}' of table '{#p2}'",
	],
	[
		"code"      => 1835,
		"symbol"    => "ER_MALFORMED_PACKET",
		"sql_state" => "HY000",
		"template"  => "Malformed communication packet.",
	],
	[
		"code"      => 1836,
		"symbol"    => "ER_READ_ONLY_MODE",
		"sql_state" => "HY000",
		"template"  => "Running in read-only mode",
	],
	[
		"code"      => 1837,
		"symbol"    => "ER_GTID_NEXT_TYPE_UNDEFINED_GROUP",
		"sql_state" => "HY000",
		"template"  => "When @@SESSION.GTID_NEXT is set to a GTID, you must explicitly set it to a different value after a COMMIT or ROLLBACK. Please check GTID_NEXT variable manual page for detailed explanation. Current @@SESSION.GTID_NEXT is '{#p1}'.",
	],
	[
		"code"      => 1838,
		"symbol"    => "ER_VARIABLE_NOT_SETTABLE_IN_SP",
		"sql_state" => "HY000",
		"template"  => "The system variable {#p1} cannot be set in stored procedures.",
	],
	[
		"code"      => 1839,
		"symbol"    => "ER_CANT_SET_GTID_PURGED_WHEN_GTID_MODE_IS_OFF",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_PURGED can only be set when @@GLOBAL.GTID_MODE = ON.",
	],
	[
		"code"      => 1840,
		"symbol"    => "ER_CANT_SET_GTID_PURGED_WHEN_GTID_EXECUTED_IS_NOT_EMPTY",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_PURGED can only be set when @@GLOBAL.GTID_EXECUTED is empty.",
	],
	[
		"code"      => 1841,
		"symbol"    => "ER_CANT_SET_GTID_PURGED_WHEN_OWNED_GTIDS_IS_NOT_EMPTY",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_PURGED can only be set when there are no ongoing transactions (not even in other clients).",
	],
	[
		"code"      => 1842,
		"symbol"    => "ER_GTID_PURGED_WAS_CHANGED",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_PURGED was changed from '{#p1}' to '{#p2}'.",
	],
	[
		"code"      => 1843,
		"symbol"    => "ER_GTID_EXECUTED_WAS_CHANGED",
		"sql_state" => "HY000",
		"template"  => "@@GLOBAL.GTID_EXECUTED was changed from '{#p1}' to '{#p2}'.",
	],
	[
		"code"      => 1844,
		"symbol"    => "ER_BINLOG_STMT_MODE_AND_NO_REPL_TABLES",
		"sql_state" => "HY000",
		"template"  => "Cannot execute statement: impossible to write to binary log since BINLOG_FORMAT = STATEMENT, and both replicated and non replicated tables are written to.",
	],
	[
		"code"      => 1845,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED",
		"sql_state" => "0A000",
		"template"  => "{#p1} is not supported for this operation. Try {#p2}.",
	],
	[
		"code"      => 1846,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON",
		"sql_state" => "0A000",
		"template"  => "{#p1} is not supported. Reason: {#p2}. Try {#p3}.",
	],
	[
		"code"      => 1847,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COPY",
		"sql_state" => "HY000",
		"template"  => "COPY algorithm requires a lock",
	],
	[
		"code"      => 1848,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_PARTITION",
		"sql_state" => "HY000",
		"template"  => "Partition specific operations do not yet support LOCK/ALGORITHM",
	],
	[
		"code"      => 1849,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_RENAME",
		"sql_state" => "HY000",
		"template"  => "Columns participating in a foreign key are renamed",
	],
	[
		"code"      => 1850,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COLUMN_TYPE",
		"sql_state" => "HY000",
		"template"  => "Cannot change column type INPLACE",
	],
	[
		"code"      => 1851,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_CHECK",
		"sql_state" => "HY000",
		"template"  => "Adding foreign keys needs foreign_key_checks=OFF",
	],
	[
		"code"      => 1852,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_IGNORE",
		"sql_state" => "HY000",
		"template"  => "Creating unique indexes with IGNORE requires COPY algorithm to remove duplicate rows",
	],
	[
		"code"      => 1853,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOPK",
		"sql_state" => "HY000",
		"template"  => "Dropping a primary key is not allowed without also adding a new primary key",
	],
	[
		"code"      => 1854,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_AUTOINC",
		"sql_state" => "HY000",
		"template"  => "Adding an auto-increment column requires a lock",
	],
	[
		"code"      => 1855,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_HIDDEN_FTS",
		"sql_state" => "HY000",
		"template"  => "Cannot replace hidden FTS_DOC_ID with a user-visible one",
	],
	[
		"code"      => 1856,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_CHANGE_FTS",
		"sql_state" => "HY000",
		"template"  => "Cannot drop or rename FTS_DOC_ID",
	],
	[
		"code"      => 1857,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FTS",
		"sql_state" => "HY000",
		"template"  => "Fulltext index creation requires a lock",
	],
	[
		"code"      => 1858,
		"symbol"    => "ER_SQL_SLAVE_SKIP_COUNTER_NOT_SETTABLE_IN_GTID_MODE",
		"sql_state" => "HY000",
		"template"  => "sql_slave_skip_counter can not be set when the server is running with @@GLOBAL.GTID_MODE = ON. Instead, for each transaction that you want to skip, generate an empty transaction with the same GTID as the transaction",
	],
	[
		"code"      => 1859,
		"symbol"    => "ER_DUP_UNKNOWN_IN_INDEX",
		"sql_state" => "23000",
		"template"  => "Duplicate entry for key '{#p1}'",
	],
	[
		"code"      => 1860,
		"symbol"    => "ER_IDENT_CAUSES_TOO_LONG_PATH",
		"sql_state" => "HY000",
		"template"  => "Long database name and identifier for object resulted in path length exceeding {p1} characters. Path: '{#p2}'.",
	],
	[
		"code"      => 1861,
		"symbol"    => "ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOT_NULL",
		"sql_state" => "HY000",
		"template"  => "cannot silently convert NULL values, as required in this SQL_MODE",
	],
	[
		"code"      => 1862,
		"symbol"    => "ER_MUST_CHANGE_PASSWORD_LOGIN",
		"sql_state" => "HY000",
		"template"  => "Your password has expired. To log in you must change it using a client that supports expired passwords.",
	],
	[
		"code"      => 1863,
		"symbol"    => "ER_ROW_IN_WRONG_PARTITION",
		"sql_state" => "HY000",
		"template"  => "Found a row in wrong partition {#p1}",
	],
	[
		"code"      => 1864,
		"symbol"    => "ER_MTS_EVENT_BIGGER_PENDING_JOBS_SIZE_MAX",
		"sql_state" => "HY000",
		"template"  => "Cannot schedule event {#p1}, relay-log name {#p2}, position {#p3} to Worker thread because its size {p4} exceeds {p5} of slave_pending_jobs_size_max.",
	],
	[
		"code"      => 1865,
		"symbol"    => "ER_INNODB_NO_FT_USES_PARSER",
		"sql_state" => "HY000",
		"template"  => "Cannot CREATE FULLTEXT INDEX WITH PARSER on InnoDB table",
	],
	[
		"code"      => 1866,
		"symbol"    => "ER_BINLOG_LOGICAL_CORRUPTION",
		"sql_state" => "HY000",
		"template"  => "The binary log file '{#p1}' is logically corrupted: {#p2}",
	],
	[
		"code"      => 1867,
		"symbol"    => "ER_WARN_PURGE_LOG_IN_USE",
		"sql_state" => "HY000",
		"template"  => "file {#p1} was not purged because it was being read by {p2} thread(s), purged only {p3} out of {p4} files.",
	],
	[
		"code"      => 1868,
		"symbol"    => "ER_WARN_PURGE_LOG_IS_ACTIVE",
		"sql_state" => "HY000",
		"template"  => "file {#p1} was not purged because it is the active log file.",
	],
	[
		"code"      => 1869,
		"symbol"    => "ER_AUTO_INCREMENT_CONFLICT",
		"sql_state" => "HY000",
		"template"  => "Auto-increment value in UPDATE conflicts with internally generated values",
	],
	[
		"code"      => 1870,
		"symbol"    => "WARN_ON_BLOCKHOLE_IN_RBR",
		"sql_state" => "HY000",
		"template"  => "Row events are not logged for {#p1} statements that modify BLACKHOLE tables in row format. Table(s): '{#p2}'",
	],
	[
		"code"      => 1871,
		"symbol"    => "ER_SLAVE_MI_INIT_REPOSITORY",
		"sql_state" => "HY000",
		"template"  => "Slave failed to initialize master info structure from the repository",
	],
	[
		"code"      => 1872,
		"symbol"    => "ER_SLAVE_RLI_INIT_REPOSITORY",
		"sql_state" => "HY000",
		"template"  => "Slave failed to initialize relay log info structure from the repository",
	],
	[
		"code"      => 1873,
		"symbol"    => "ER_ACCESS_DENIED_CHANGE_USER_ERROR",
		"sql_state" => "28000",
		"template"  => "Access denied trying to change to user '{#p1}'@'{#p2}' (using password: {#p3}). Disconnecting.",
	],
	[
		"code"      => 1874,
		"symbol"    => "ER_INNODB_READ_ONLY",
		"sql_state" => "HY000",
		"template"  => "InnoDB is in read only mode.",
	],
	[
		"code"      => 1875,
		"symbol"    => "ER_STOP_SLAVE_SQL_THREAD_TIMEOUT",
		"sql_state" => "HY000",
		"template"  => "STOP SLAVE command execution is incomplete: Slave SQL thread got the stop signal, thread is busy, SQL thread will stop once the current task is complete.",
	],
	[
		"code"      => 1876,
		"symbol"    => "ER_STOP_SLAVE_IO_THREAD_TIMEOUT",
		"sql_state" => "HY000",
		"template"  => "STOP SLAVE command execution is incomplete: Slave IO thread got the stop signal, thread is busy, IO thread will stop once the current task is complete.",
	],
	[
		"code"      => 1877,
		"symbol"    => "ER_TABLE_CORRUPT",
		"sql_state" => "HY000",
		"template"  => "Operation cannot be performed. The table '{#p1}.{#p2}' is missing, corrupt or contains bad data.",
	],
	[
		"code"      => 1878,
		"symbol"    => "ER_TEMP_FILE_WRITE_FAILURE",
		"sql_state" => "HY000",
		"template"  => "Temporary file write failure.",
	],
	[
		"code"      => 1879,
		"symbol"    => "ER_INNODB_FT_AUX_NOT_HEX_ID",
		"sql_state" => "HY000",
		"template"  => "Upgrade index name failed, please use create index(alter table) algorithm copy to rebuild index.",
	],
	[
		"code"      => 1880,
		"symbol"    => "ER_OLD_TEMPORALS_UPGRADED",
		"sql_state" => "HY000",
		"template"  => "TIME/TIMESTAMP/DATETIME columns of old format have been upgraded to the new format.",
	],
	[
		"code"      => 1881,
		"symbol"    => "ER_INNODB_FORCED_RECOVERY",
		"sql_state" => "HY000",
		"template"  => "Operation not allowed when innodb_forced_recovery > 0.",
	],
	[
		"code"      => 1882,
		"symbol"    => "ER_AES_INVALID_IV",
		"sql_state" => "HY000",
		"template"  => "The initialization vector supplied to {#p1} is too short. Must be at least {p2} bytes long",
	],
	[
		"code"      => 1883,
		"symbol"    => "ER_PLUGIN_CANNOT_BE_UNINSTALLED",
		"sql_state" => "HY000",
		"template"  => "Plugin '{#p1}' cannot be uninstalled now. {#p2}",
	],
	[
		"code"      => 1884,
		"symbol"    => "ER_GTID_UNSAFE_BINLOG_SPLITTABLE_STATEMENT_AND_GTID_GROUP",
		"sql_state" => "HY000",
		"template"  => "Cannot execute statement because it needs to be written to the binary log as multiple statements, and this is not allowed when @@SESSION.GTID_NEXT == 'UUID:NUMBER'.",
	],
	[
		"code"      => 1885,
		"symbol"    => "ER_SLAVE_HAS_MORE_GTIDS_THAN_MASTER",
		"sql_state" => "HY000",
		"template"  => "Slave has more GTIDs than the master has, using the master's SERVER_UUID. This may indicate that the end of the binary log was truncated or that the last binary log file was lost, e.g., after a power or disk failure when sync_binlog != 1. The master may or may not have rolled back transactions that were already replicated to the slave. Suggest to replicate any transactions that master has rolled back from slave to master, and/or commit empty transactions on master to account for transactions that have been committed on master but are not included in GTID_EXECUTED.",
	],
	[
		"code"      => 1886,
		"symbol"    => "ER_MISSING_KEY",
		"sql_state" => "HY000",
		"template"  => "The table '{#p1}.{#p2}' does not have the necessary key(s) defined on it. Please check the table definition and create index(s) accordingly.",
	],
	[
		"code"      => 1887,
		"symbol"    => "WARN_NAMED_PIPE_ACCESS_EVERYONE",
		"sql_state" => "HY000",
		"template"  => "Setting named_pipe_full_access_group='{#p1}' is insecure. Consider using a Windows group with fewer members.",
	],
];

return array_merge($previous, $new);
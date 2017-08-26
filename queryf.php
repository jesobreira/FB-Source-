Index: flib/core/db/queryf.php
===================================================================
--- flib/core/db/queryf.php
+++ flib/core/db/queryf.php
@@ -1104,6 +1104,7 @@
  *  @author donpinkus
  */
 function mysql_query_all($sql, $ok_sql, $conn, $params) {
+  FBTraceDB::rqsend($ok_sql);
   switch (SQLQueryType::parse($sql)) {
     case SQLQueryType::READ:
       $t_start = microtime(true);

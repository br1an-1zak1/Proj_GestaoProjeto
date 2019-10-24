CREATE USER Fatec_Sem4 IDENTIFIED by nivaldo;

GRANT  CONNECT, RESOURCE, DBA TO  Fatec_Sem4;

SELECT 
  username,
  default_tablespace,
  temporary_tablespace 
FROM  
  dba_users;
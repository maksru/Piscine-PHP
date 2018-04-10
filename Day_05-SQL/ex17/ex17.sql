SELECT count(id_sub) AS nb_susc, FLOOR(AVG(price)) 
AS av_susc, MOD(SUM(duration_sub), 42) AS ft 
FROM subscription;

INSERT INTO qu_pap_clicks (userid,campaignid,bannerid,parentbannerid,countrycode,cdata1,cdata2,channel,dateinserted,raw,uniq,declined) SELECT userid, campaignid, bannerid, parentbannerid, countrycode, cdata1, cdata2, channel, CONCAT(DATE(day), ' 15:00:00') as dateinserted, raw_15 as raw, unique_15 as uniq, declined_15 as `declined` FROM qu_pap_dailyclicks WHERE raw_15 > 0 OR unique_15 > 0 OR declined_15 > 0 ;
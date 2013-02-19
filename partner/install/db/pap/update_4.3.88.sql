INSERT INTO qu_pap_impressions (userid,campaignid,bannerid,parentbannerid,countrycode,cdata1,cdata2,channel,dateinserted,raw,uniq) SELECT userid, campaignid, bannerid, parentbannerid, countrycode, cdata1, cdata2, channel, DATE_FORMAT(month, '%Y-%m-31 12:00:00') as dateinserted, raw_31 as raw, unique_31 as uniq FROM qu_pap_monthlyimpressions WHERE DAY(LAST_DAY(month)) >= 31 AND (raw_31 > 0 OR unique_31 > 0);
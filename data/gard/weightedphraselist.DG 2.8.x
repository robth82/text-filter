# DANSGUARDIAN weightedphraselist INSTRUCTIONS FOR USE
#
# Examples:
#
# <slut><10>			
# - Adds 10 to the count against the string 'slut'.   ie. sluts, slut!, abslutxyz.
#
# < slut ><10>
# - Adds 10 to the count against the word 'slut'.   ie. Sally is a slut that smells.
#
# <slut>,<horny><50>
# - Adds 50 to the count when the strings 'slut' and 'horny' are found on the same page.
#
# <breast>,<medical><-30>
# - Subtracts 30 from the count when 'breast' and 'medical' are on the one page.
#
# <education><-25>
# - Subtracts 25 from the count when 'education' is on the page.
#
# See the bannedphraselist for more examples.
#
# Extra weighted-list files to include
# .Include</etc/dansguardian/phraselists/weightedphraselist.topic>
#
# Help by contributing customised lists and/or new keyword lists. 
# Email: pornmastergeneral@dansguardian.org or phrasemaster@dansguardian.org
#
# NOTE: New lists are commented out as ALPHA or BETA depending on how much the 
# lists have been tested.
# ALPHA - Brand new and/or incomplete - little testing has been done
# BETA - Relatively new - tested in several locations
#

#listcategory: "Weighted Phrases"

#To enable several non-PICS self-labelling and self-rating systems.  
#Enabled as a bannedsitelist by default.  Disable there before enabling as a phraselist.
#.Include</etc/dansguardian/phraselists/selflabeling/weighted>

#Good Phrases (to allow medical, education, news and other good sites)
.Include</etc/dansguardian/phraselists/goodphrases/weighted_general>
.Include</etc/dansguardian/phraselists/goodphrases/weighted_news>
.Include</etc/dansguardian/phraselists/goodphrases/weighted_general_danish>
.Include</etc/dansguardian/phraselists/goodphrases/weighted_general_dutch>
.Include</etc/dansguardian/phraselists/goodphrases/weighted_general_malay>
.Include</etc/dansguardian/phraselists/goodphrases/weighted_general_portuguese>

#Pornography
.Include</etc/dansguardian/phraselists/pornography/weighted>
.Include</etc/dansguardian/phraselists/pornography/weighted_chinese> #ALPHA#
.Include</etc/dansguardian/phraselists/pornography/weighted_danish> #ALPHA#
.Include</etc/dansguardian/phraselists/pornography/weighted_dutch> #BETA#
.Include</etc/dansguardian/phraselists/pornography/weighted_french>
.Include</etc/dansguardian/phraselists/pornography/weighted_german>
.Include</etc/dansguardian/phraselists/pornography/weighted_italian>
.Include</etc/dansguardian/phraselists/pornography/weighted_japanese> #ALPHA#
.Include</etc/dansguardian/phraselists/pornography/weighted_malay> #BETA#
.Include</etc/dansguardian/phraselists/pornography/weighted_norwegian> #BETA#
.Include</etc/dansguardian/phraselists/pornography/weighted_portuguese>
.Include</etc/dansguardian/phraselists/pornography/weighted_spanish> #ALPHA#
.Include</etc/dansguardian/phraselists/pornography/weighted_russian> #BETA#
.Include</etc/dansguardian/phraselists/nudism/weighted>

#Bad Words - swearing
.Include</etc/dansguardian/phraselists/badwords/weighted_dutch> 
.Include</etc/dansguardian/phraselists/badwords/weighted_french>
.Include</etc/dansguardian/phraselists/badwords/weighted_german> #ALPHA#
.Include</etc/dansguardian/phraselists/badwords/weighted_portuguese> #ALPHA#
.Include</etc/dansguardian/phraselists/badwords/weighted_spanish> #ALPHA#

#Drugs
#.Include</etc/dansguardian/phraselists/drugadvocacy/weighted>
#.Include</etc/dansguardian/phraselists/illegaldrugs/weighted>
#.Include</etc/dansguardian/phraselists/illegaldrugs/weighted_portuguese>
#.Include</etc/dansguardian/phraselists/legaldrugs/weighted>

#Violence and intolerance
#.Include</etc/dansguardian/phraselists/intolerance/weighted>
#.Include</etc/dansguardian/phraselists/intolerance/weighted_portuguese>
#.Include</etc/dansguardian/phraselists/gore/weighted>
#.Include</etc/dansguardian/phraselists/gore/weighted_portuguese>
#.Include</etc/dansguardian/phraselists/violence/weighted>
#.Include</etc/dansguardian/phraselists/violence/weighted_portuguese>
#.Include</etc/dansguardian/phraselists/weapons/weighted>
#.Include</etc/dansguardian/phraselists/weapons/weighted_portuguese>

#Chat
#.Include</etc/dansguardian/phraselists/chat/weighted>
#.Include</etc/dansguardian/phraselists/chat/weighted_italian>

#Webmail
#.Include</etc/dansguardian/phraselists/webmail/weighted>
#Note that if you enable the webmail weighted list you should also disable 
#the "exception_email" list in the exceptionphraselist file.

#Forums
#.Include</etc/dansguardian/phraselists/forums/weighted> #BETA#

#Gambling
#.Include</etc/dansguardian/phraselists/gambling/weighted>
#.Include</etc/dansguardian/phraselists/gambling/weighted_portuguese>

#Productivity
#.Include</etc/dansguardian/phraselists/games/weighted> #ALPHA#
#.Include</etc/dansguardian/phraselists/news/weighted> #ALPHA#
#.Include</etc/dansguardian/phraselists/personals/weighted>
#.Include</etc/dansguardian/phraselists/personals/weighted_portuguese>
#.Include</etc/dansguardian/phraselists/sport/weighted> #ALPHA#
#.Include</etc/dansguardian/phraselists/travel/weighted>
#.Include</etc/dansguardian/phraselists/music/weighted>

#System Management and Security
#.Include</etc/dansguardian/phraselists/domainsforsale/weighted>
#.Include</etc/dansguardian/phraselists/idtheft/weighted>
.Include</etc/dansguardian/phraselists/malware/weighted> #BETA#
.Include</etc/dansguardian/phraselists/proxies/weighted>
#.Include</etc/dansguardian/phraselists/translation/weighted>
#.Include</etc/dansguardian/phraselists/upstreamfilter/weighted>
.Include</etc/dansguardian/phraselists/warezhacking/weighted>

#Miscellaneous	
#.Include</etc/dansguardian/lists/phraselists/conspiracy/weighted>
#.Include</etc/dansguardian/phraselists/secretsocieties/weighted>



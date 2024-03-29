# BANNEDPHRASELIST - INSTRUCTIONS FOR USE
#
# To block any page with the word "sex".
# < sex >
#
# To block any page with words that contain the string "sex". (ie. sexual)
# <sex>
#
# To block any page with the string "sex magazine".
# <sex magazine>
#
# To block any page containing the words/strings "sex" and "fetish".
# <sex>,<fetish>
#
# < test> will match any word with the string 'test' at the beginning
# <test > will match any word with the string 'test' at the end
# <test> will match any word with the string 'test' at any point in the word
# < test > will match only the word 'test'
# <this is a test phrase> will match that exact phrase
# <test>,<secondtest> will match if both words are found in the page
# A combination of the above can also be used eg < test>,<secondtest>
#
#
# Extra phrase-list files to include
# .Include</etc/dansguardian/testphrase>
#
#
# All phrases need to be within < and > to work, othewise they will be
# ignored.

# MORE EXAMPLE LISTS CAN BE DOWNLOADED FROM DANSGUARDIAN.ORG

# Phrase Exceptions are no longer listed in this file, they are now
# listed in the exceptionphraselist file.
#

#listcategory: "Banned Phrases"

# The following banned phraselists enable Website Content Labeling systems.  These are enabled by default, but may also be activated using phraselists.  

.Include</etc/dansguardian/lists/phraselists/selflabeling/banned>

# The following banned phraselists are included in the default DG distribution.

.Include</etc/dansguardian/lists/phraselists/pornography/banned>
#.Include</etc/dansguardian/lists/phraselists/pornography/banned_portuguese>

#.Include</etc/dansguardian/lists/phraselists/illegaldrugs/banned>

#.Include</etc/dansguardian/lists/phraselists/gambling/banned>
#.Include</etc/dansguardian/lists/phraselists/gambling/banned_portuguese>

#.Include</etc/dansguardian/lists/phraselists/googlesearches/banned>

#.Include</etc/dansguardian/lists/phraselists/intolerance/banned_portuguese>



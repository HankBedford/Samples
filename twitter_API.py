import tweepy
import textblob
consumer_Key = 'egCBYLUaFz2O1uSkOaMztm6Ij'
consumer_Secret = 'EZgngtEU0o6617NAjYJ0P7fb5K73c8vjYrG2ss0cOxctrgxNh1'

access_Key = '4308126313-2uN18LdAAD8qbiGDGSONze59lMkyaHN2S2Ary4a'
access_Secret = 'ZNXOHQvHZkPthDyNhzOgvAE8g02zRviJcteUnuDvdVQtH'

auth = tweepy.OAuthHandler(consumer_Key,consumer_Secret)
auth.set_access_token(access_Key,access_Secret)

search_term = 'Trump'

API = tweepy.API(auth)

public_Tweets = API.search(search_term)

for tweet in public_Tweets:
	print tweet.text.encode('utf-8')
'''
Try to impliment an input function to search for tweets in search_term variable then put in some kind of 
HTML webpage
'''
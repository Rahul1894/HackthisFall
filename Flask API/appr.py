# import streamlit as st
import preprocessor,helpercopy,helper
# import matplotlib.pyplot as plt
# import seaborn as sns


def process(data):
    df = preprocessor.preprocess(data)

    # fetch unique users
    user_list = df['user'].unique().tolist()
    # user_list.remove('group_notification')
    user_list.sort()
    user_list.insert(0,"Overall")
        # Stats Area
    num_messages, words, num_media_messages, num_links = helpercopy.fetch_stats(df)
    # WordCloud
    # df_wc = helpercopy.create_wordcloud(df) 

    # most common words
    most_common_df = helpercopy.most_common_words(df)

    # emoji analysis
    emoji_df = helpercopy.emoji_helper(df)


    return [num_messages, words, most_common_df, emoji_df]









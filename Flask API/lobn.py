from langchain_openai import OpenAI 
import os 
os.environ["OPEN_API_KEY"]="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"
llm=OpenAI(openai_api_key=os.environ["OPEN_API_KEY"],temperature=0.6)
def work(a):
    response=llm.invoke(a)
    return response
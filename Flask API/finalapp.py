 
from flask import Flask, request, jsonify
from flask_cors import CORS
app = Flask(__name__)
CORS(app)
import appr
import lobn
@app.route('/ask',methods=["POST"])
def chatbot():
    a=request.json.get("prompt")
    if(request.json.get("type")=="lobn"):
        response = lobn.work(a)
    else:
        response = appr.process(a)
    return jsonify({'response': response}), 200
@app.route("/",methods=["GET","POST"])
def h():
    return 'dddddd'

@app.route('/repo',methods=["POST"])
def chatbot2():
    return 'dddddd'
    a=request.json.get("data")
    return jsonify({'response': a}), 200
    response = appr.process(a)
    return jsonify({'response': response}), 200
if __name__=="__main__":
    app.run()
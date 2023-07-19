from flask import *
from predict import predict__random_forest

app = Flask(__name__)
@app.route('/success', methods = ['POST'])  #app url
def success():
    if request.method == 'POST':
        data = request.get_json()
        quality_of_collection_bags_cleanness = float(data.get('quality_of_collection_bags_cleanness'))
        num_of_needles = float(data.get('num_of_needles'))
        satellite_bag = float(data.get('satellite_bag'))
        clots = float(data.get('clots'))
        net_weight =float(data.get('net_weight'))
        volume = float(data.get('volume'))
        prewbcsx109l = float(data.get('prewbcsx109l'))
        pre_cd_45_34 = float(data.get('pre_cd_45_34'))
        pre_viability_of_tnc = float(data.get('pre_viability_of_tnc'))
        post_wbcsx109_l = float(data.get('post_wbcsx109_l'))

    return predict__random_forest(quality_of_collection_bags_cleanness,num_of_needles,satellite_bag,clots,net_weight,volume,prewbcsx109l,pre_cd_45_34,pre_viability_of_tnc,post_wbcsx109_l)





if __name__ == "__main__":
    app.run(host='127.0.0.1', debug=True)

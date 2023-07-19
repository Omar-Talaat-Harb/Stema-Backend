import json
import pickle
import pandas as pd
import numpy as np 

# with open('model.pickle', 'wb') as f:
#     pickle.dump(rf_RandomGrid, f)

def predict__random_forest(f1,f2,f3,f4,f5,f6,f7,f8,f9,f10):
    
    # convert to 2d array 
    model_data = np.array([[f1,f2,f3,f4,f5,f6,f7,f8,f9,f10]])

    # Load the trained and tuned model from a file
    with open('model_1.pickle', 'rb') as f:
        model = pickle.load(f)
    
    # Make predictions using the tuned Random Forest classifier
    predictions = model.predict(model_data)
    
    # Convert the predictions to a JSON string
    result = {'predictions': predictions.tolist()}
    result_json = json.dumps(result)
    
    return result_json




# f1,f2,f3,f4,f5,f6,f7,f8,f9,f10 = 2.0, 0.0, 1.0, 0.0, 109.0, 103.0, 13.000000, 0.800000, 90.000000, 38.700000

# print(predict__random_forest(f1,f2,f3,f4,f5,f6,f7,f8,f9,f10))



import * as types from '../actions/actionTypes';  
export default function catReducer(state = {
	cats: [],
  	hobbies: []
  }, action) {  
  switch(action.type) {
    case types.LOAD_CATS_SUCCESS:
      return action.cats
    default: 
      return state;
  }
}
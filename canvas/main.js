import React from 'react';
import ReactDOM from 'react-dom';
import App from './src/App';
import {Provider} from 'react-redux'

import configureStore from './src/store/configureStore'
import {loadCats} from './src/actions/catActions';

const store = configureStore();

store.dispatch(loadCats());

ReactDOM.render(
	<Provider store={store}>
		<App />
	</Provider>
	, document.getElementById('app'));
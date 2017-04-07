import React from 'react';
import ReactDOM from 'react-dom';
import App from './reactjs/App';
import {Provider} from 'react-redux'

import configureStore from './reactjs/store/configureStore'
import {loadCats} from './reactjs/actions/catActions';

const store = configureStore();

store.dispatch(loadCats());

ReactDOM.render(
	<Provider store={store}>
		<App />
	</Provider>
	, document.getElementById('app'));
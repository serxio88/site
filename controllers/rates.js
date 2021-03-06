const axios = require('axios');
const Localization = require('./../helpers/localization').Localization;
const config = require('config');
const API_URL = config.get('BLOCKCHAIN_API_URL');

const prepareTransactions = require('./../helpers/rates').prepareTransactions;
const calculateAmount = require('./../helpers/rates').calculateAmount

const MPT_CURRENCY_CODE = 'USD';
const DOLLAR_RATE = 0.01;
const EXCHANGE_API = 'https://min-api.cryptocompare.com/data/price';

exports.getRates = async (req, res) => {
    const response = await axios.get(`${API_URL}/api/blockchain/blocks`);
    const chain = response.data;


    let transactions = [];
    if (chain && chain.length > 0) {
        for (var length = chain.length, i = length - 1; i >= 0; i--) {
            transactions = transactions.concat(chain[i].Transactions);
        }
    }

    const chartTransactions = prepareTransactions(transactions);
    const localization = new Localization(req.cookies.locale);

    res.render('pages/rates', { 
        chartTransactions,
        PAGE_TITLE: localization.localize('titles.rates'),
        pageName: 'rates',
        title: localization.localize('titles.rates'),
        req,
    });
};

exports.calculateRates = async (req, res) => {
    const {
        currency,
        amount,
    } = req.body;

    const request = await axios.get(EXCHANGE_API, { 
        params: { fsym: currency.toUpperCase(), tsyms: MPT_CURRENCY_CODE }, 
    });
    const result = request.data[MPT_CURRENCY_CODE];
    res.setHeader('Content-Type', 'application/json');
    res.send(JSON.stringify({ status: 200, rate: calculateAmount(+amount, result, DOLLAR_RATE) }));
};


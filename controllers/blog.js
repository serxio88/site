const config = require('config');
const axios = require('axios');
const { DataPager } = require('./../helpers/pager');
const { getBlogPosts, getBlogPost } = require('./../helpers/blog');
const Localization = require('../helpers/localization').Localization;

exports.getBlogPosts = async (req, res) => {
    const {
        page,
        count
    } = req.query;
    const PAGE_TITLE = new Localization(req.cookies.locale).localize('pageTitles.blog');

    const blogArticles = getBlogPosts();

    const dataPager = new DataPager(blogArticles, count, page);
    const pagerInfo = {
        pager: dataPager.pager,
        baseUrl: '/blog',
        parameters: req.query
      };

    res.render('pages/blog', { 
        blogArticles: dataPager.getPageData(),
        pagerInfo,
        PAGE_TITLE, 
        title: PAGE_TITLE,
        req,
    });
};

exports.getBlogPost = async (req, res) => {
    const id = req.params.id;
    const blogArticle = getBlogPost(+id);
    const PAGE_TITLE = new Localization(req.cookies.locale).localize('pageTitles.blog');


    res.render('pages/text', { 
        blogArticle,
        PAGE_TITLE, 
        title: PAGE_TITLE,
        req,
    });
};
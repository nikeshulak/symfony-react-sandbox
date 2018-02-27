import React from 'react'
import { Link } from "react-router-dom";
// import NavLink from './NavLink';//some thing might need to be installed

import { Helmet } from "react-helmet";

// import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';

// import AboutTemplate from './AboutTemplate'

export default class Footer extends React.Component {

    render() {
        // console.log(this.props);

        const template = (
            <div className="footer">
              <div className="container-fluid">
                &copy; Nepal Monitor
              </div>
            </div>
        );

        return (
            <div>
                { template }
            </div>
        );
    }
}
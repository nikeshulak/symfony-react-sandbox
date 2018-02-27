import React from 'react'
import { Link } from "react-router-dom";
// import NavLink from './NavLink';//some thing might need to be installed

import { Helmet } from "react-helmet";

// import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';

// import AboutTemplate from './AboutTemplate'

export default class HeaderTemplate extends React.Component {

    render() {
        // console.log(this.props);

        const template = (
            <div>

              {/* begin header */}
              <header>
                  <div className="container-fluid">
                      {/*<a className="navbar-brand" href="">*/}
                      <img src="/images/banner.png" />
                      {/*</a>*/}
                  </div>
              </header>

              <nav className="navbar navbar-expand-lg navbar-light bg-faded">
                  <div className="container-fluid">

                      <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span className="navbar-toggler-icon"></span>
                      </button>

                      <div className="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul className="navbar-nav mr-auto">
                              <li className="nav-item active">
                                {/*<a className="nav-link" href="/">Home <span className="sr-only">(current)</span></a>*/}
                                <Link to="/" className="nav-link">Home</Link>
                              </li>

                              {/*<li className="nav-item">
                                <Link to="/report" className="nav-link">Reports</Link>
                              </li>*/}

                              <li className="nav-item">
                                <Link to="/recipe/" className="nav-link">Recipe</Link>
                              </li>
                          </ul>
                      </div>

                  </div>
              </nav>
              {/*end header and nav*/}

            
            </div>
        );

        return (
            <div>
                { template }
            </div>
        );
    }
}
// router
import React from "react";
import Recipes from "../containers/Recipes";
import Recipe from "../containers/Recipe";

// maps
import Maps from "../containers/Maps";

import { renderToString } from "react-dom/server";
import { BrowserRouter, StaticRouter, Route } from "react-router-dom";
import { Helmet } from "react-helmet";

const RecipesApp = ({initialProps, appContext}) => {
  return (
    <div>
      <Route
        path={"/recipe/:id"}
        render={props => (
          <Recipe {...initialProps} base={appContext.base} {...props} />
        )}
      />

      {/*path={"/"}*/}
      <Route
        path={"/recipe/"}
        exact
        render={props => {
          return <Recipes {...initialProps} base={appContext.base} {...props} />;
        }}
      />

    {/*maps*/}

    <Route
      path={"/"}
      exact
      render={props => {
        return <Maps {...initialProps} base={appContext.base} {...props} />;
      }}
    />

    </div>
  );
};

export default RecipesApp;
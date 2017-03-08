import {RouterModule, Routes} from "@angular/router";
import {HomeComponent} from "./components/home-component";
import {AboutComponent} from "./components/about-component";
import {SignUpComponent} from "./components/signup-component";
import {NotFoundComponent} from "./components/notfound-component";
import {MainNavComponent} from "./components/mainnav-component";

export const allAppComponents = [HomeComponent, AboutComponent, SignUpComponent, NotFoundComponent, MainNavComponent];

export const routes: Routes = [
	{path: "", component: HomeComponent},
	{path: "about", component: AboutComponent},
	{path: "sign-up", component: SignUpComponent},
	{path: "**", component: NotFoundComponent}
];

export const appRoutingProviders: any[] = [];

export const routing = RouterModule.forRoot(routes);
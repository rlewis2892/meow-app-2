import {RouterModule, Routes} from "@angular/router";
import {HomeComponent} from "./components/home-component";
import {AboutComponent} from "./components/about-component";
import {SignUpComponent} from "./components/signup-component";

export const allAppComponents = [HomeComponent, AboutComponent, SignUpComponent];

export const routes: Routes = [
	{path: "", component: HomeComponent},
	{path: "about", component: AboutComponent},
	{path: "sign-up", component: SignUpComponent}
];

export const appRoutingProviders: any[] = [];

export const routing = RouterModule.forRoot(routes);
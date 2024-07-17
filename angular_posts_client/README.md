# AngularCrud

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 17.2.2.

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The application will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via a platform of your choice. To use this command, you need to first add a package that implements end-to-end testing capabilities.

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI Overview and Command Reference](https://angular.io/cli) page.



############################################################

PS C:\Users\Juan Felipe\OneDrive\Escritorio> ng new angular-crud
? Which stylesheet format would you like to use? CSS
? Do you want to enable Server-Side Rendering (SSR) and Static Site Generation (SSG/Prerendering)? No
CREATE angular-crud/angular.json (2717 bytes)
CREATE angular-crud/package.json (1081 bytes)
CREATE angular-crud/README.md (1092 bytes)
CREATE angular-crud/tsconfig.json (936 bytes)
CREATE angular-crud/.editorconfig (290 bytes)
CREATE angular-crud/.gitignore (590 bytes)
CREATE angular-crud/tsconfig.app.json (277 bytes)
CREATE angular-crud/tsconfig.spec.json (287 bytes)
CREATE angular-crud/.vscode/extensions.json (134 bytes)
CREATE angular-crud/.vscode/launch.json (490 bytes)
CREATE angular-crud/.vscode/tasks.json (980 bytes)
CREATE angular-crud/src/main.ts (256 bytes)
CREATE angular-crud/src/favicon.ico (15086 bytes)
CREATE angular-crud/src/index.html (310 bytes)
CREATE angular-crud/src/styles.css (81 bytes)
CREATE angular-crud/src/app/app.component.html (20239 bytes)
CREATE angular-crud/src/app/app.component.spec.ts (963 bytes)
CREATE angular-crud/src/app/app.component.ts (321 bytes)
CREATE angular-crud/src/app/app.component.css (0 bytes)
CREATE angular-crud/src/app/app.config.ts (235 bytes)
CREATE angular-crud/src/app/app.routes.ts (80 bytes)
CREATE angular-crud/src/assets/.gitkeep (0 bytes)
✔ Packages installed successfully.
    Successfully initialized git.


PS C:\Users\Juan Felipe\OneDrive\Escritorio> cd angular-crud
PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> code .


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> npm install bootstrap

added 2 packages, and audited 914 packages in 8s

120 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate module post
CREATE src/app/post/post.module.ts (202 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate component post/index
CREATE src/app/post/index/index.component.html (21 bytes)
CREATE src/app/post/index/index.component.spec.ts (612 bytes)
CREATE src/app/post/index/index.component.ts (242 bytes)
CREATE src/app/post/index/index.component.css (0 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate component post/view
CREATE src/app/post/view/view.component.html (20 bytes)
CREATE src/app/post/view/view.component.spec.ts (605 bytes)
CREATE src/app/post/view/view.component.ts (238 bytes)
CREATE src/app/post/view/view.component.css (0 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate component post/create
CREATE src/app/post/create/create.component.html (22 bytes)
CREATE src/app/post/create/create.component.spec.ts (619 bytes)
CREATE src/app/post/create/create.component.ts (246 bytes)
CREATE src/app/post/create/create.component.css (0 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate component post/edit
CREATE src/app/post/edit/edit.component.html (20 bytes)
CREATE src/app/post/edit/edit.component.spec.ts (605 bytes)
CREATE src/app/post/edit/edit.component.ts (238 bytes)
CREATE src/app/post/edit/edit.component.css (0 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate interface post/post
CREATE src/app/post/post.ts (28 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng generate service post/post
CREATE src/app/post/post.service.spec.ts (363 bytes)
CREATE src/app/post/post.service.ts (142 bytes)


PS C:\Users\Juan Felipe\OneDrive\Escritorio\angular-crud> ng serve -o
Initial chunk files | Names         |  Raw size
styles.css          | styles        | 271.13 kB |
polyfills.js        | polyfills     |  83.60 kB |
main.js             | main          |  24.82 kB |

                    | Initial total | 379.55 kB

Application bundle generation complete. [11.437 seconds]

Watch mode enabled. Watching for file changes...
  ➜  Local:   http://localhost:4200/
  ➜  press h + enter to show help
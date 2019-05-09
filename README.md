![alt text](https://styleguide.coach/wp-content/themes/coach-styleguide/img/logo-coach.svg)
# Coach Styleguide Theme
Custom Wordpress theme created specifically for [Coach Styleguide](https://styleguide.coach). 
> **NOTE**: This theme is still in development 


## Content Heirarchy
### Categories
Categories are used to establish high-level groupings of content. These are listed on the homepage and at the top of sidebar menus. 
  #### Editing Categories
  * Categories can be managed through the CMS by going to __Posts>Categories__.
  * To re-order the list of categories on the homepage, go to __Posts>Taxonomy Order__ and drag and drop them into the desired order. This will automatically update the homepage.
  * Each category should have a unique color that's used for hover and active states throughout the site. When adding a new category, make sure to add the following snippet to `main.css`:
      ```css
      #category-slug label span:hover,
      #category-slug .current-post,
      #category-slug .ez-toc-list li a:hover,
      #category-slug .ez-toc-list li .active {
        color: # ;
      }
      #category-slug .ez-toc-list .active {
        border-color: # ;
      }
      ```
      * and then the following snippet to `home.css`:<br>
      ```
      .hover-category-slug::after {
      background-color: # ;
      }
      ```
### Posts
Posts are used to organize a category into several different pages. These are listed in their parent category's sidebar menu.
  #### Editing Posts
  > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  #### Adding Posts
  > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  #### Re-arranging Categories in Sidebar
  > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

### Sections (h2)
  Sections are used to organize a page into smaller chunks of content. These are listed as child items in the sidebar menu *only* when their parent post is active.


## User Management
  ### User Roles
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  ### Users
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.


## Homepage
Homepage cannot be edited from the CMS. It can only be edited directly from home.php and home.css.


## Staging
  ### Switching to Staging Environment
  A staging environment can be accessed by going to [styleguide.coach/dev/wp-admin](https://styleguide.coach/dev/wp-admin)

## Plugins
  ### Visual Editor
  * **Elementor** - Allows editors to add & edit content to site from CMS
  * **Elementor Pro** - Adds "Pro" features to Elementor visual editor
  ### Content Management
  * **Category Order and Taxonomy Terms Order** - To reorder Homepage
  * **Post Types Order** - To reorder Sidebar
  ### User Management
  * **Members** - User management dashboard
   * **Members Hierarchy** - Allows admin to add a hierarchy of permissions to user roles
  * **Restrict User Taxonomies** - Assign a specific category to a user role to restrict which content they can manage
  ### Functionality 
  * **Ajaxify WordPress Site** - Adds ajax functionality to site
  * **Easy Table of Contents** - Used in sidebar.php to add dynamic a menu of all *h2* elements on a page
  * **GitHub Updater** - To pull theme updates from GitHub repository
  * **Password Protected** - Password-protects the entire website
  ### Admin 
  * **Adminimize** - Allows admin to add/remove menu items from the dashboard based on a user's role
  * **Fancy Admin UI** - Changes the UI of the admin dashboard
  * **Akismet Anti-Spam** - Protects site from spam
  * **Fast User Switching** - Allows admin to view dashboard as different user roles















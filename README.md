![alt text](https://styleguide.coach/wp-content/themes/coach-styleguide/img/logo-coach.svg)
# Coach Styleguide Theme
Custom Wordpress theme created specifically for [Coach Styleguide](https://styleguide.coach). 
> **NOTE**: This theme is still in development 

### Table of Contents <!-- Table of contents generated generated by http://tableofcontent.eu -->
 - [Content Heirarchy](#content-heirarchy)
   - [Categories](#categories)
   - [Posts](#posts)
   - [Sections](#sections)
 - [User Management](#user-management)
 - [Homepage](#homepage)
 - [Staging](#staging)
 - [Plugins](#plugins)

## Content Heirarchy
### Categories
Categories are used to establish high-level groupings of content. These are listed on the homepage and at the top of sidebar menus. 
  #### Editing Categories
  * Categories can be managed through the CMS by going to __Posts>Categories__.
  * To re-order the list of categories on the homepage, go to __Posts>Taxonomy Order__ and drag and drop them into the desired order. This will automatically update the homepage.
  * Each category should have a unique color that's used for hover and active states throughout the site. When adding a new category, make sure to add the following snippet to `category-colors.css`:
      ```css
      #category-slug label span:hover,
      #category-slug .current-post,
      #category-slug .ez-toc-list li a:hover,
      #category-slug .ez-toc-list li .active {
        color: #;
      }
      #category-slug .ez-toc-list .active {
        border-color: #;
      }
      #category-slug::after {
        background-color: #;
      }
      ```
      > Note that "#category-slug" needs to be replaced with the specific slug of the new category. This can be found in Posts>Categories
      
### Posts
Posts are used to organize a category into several different pages. These are listed in their parent category's sidebar menu.
  #### Adding a New Post
  1. In the admin back-end, go to **Posts** in the sidebar
  2. Click **Add New** at the top of the page
  3. Give the post a title in the textbox that says "Add title" (Note that this title is user-facing)
  4. In the sidebar on the right-hand side of the screen, go to the **Categories** section and select a category. (_All posts **must** have a category. "Uncategorized" should never be used_)
  5. Click **Edit with Elementor** at the top of the page
  6. When finished editing, click the green **Publish** or **Save Draft** button at the bottom of the screen
  #### Editing a Post
  1. In the admin back-end, go to **Posts** in the sidebar
  2. Find the post you'd like to edit in the list and hover over it
  3. Click on the **Edit with Elementor** button below the title 
  4. When finished editing, click the green **Publish** or **Save Draft** button at the bottom of the screen
  #### Deleting a Post
  1. In the admin back-end, go to **Posts** in the sidebar
  2. Find the post you'd like to delete in the list and hover over it
  3. Click on the **Trash** button below the title 
  #### Re-arranging Posts
  1. In the admin back-end, go to **Posts** in the sidebar
  2. Click on the post that you'd like to rearrange and drag it to the desired spot in the list. This will automatically update the order of the list in the front-end navigation menu

### Sections
  Sections are used to organize a page into smaller chunks of content. These are listed as child items in the sidebar menu *only* when their parent post is active. 
  
  These are automatically generated with all **h2** elements in the post. When laying out a new post, please be deliberate when using the h2 class.


## User Management
  ### User Roles
  Every user needs to be assigned a user role. User roles dictate the privileges that a user has in the back-end and ensures that every user's dashboard is streamlined with only the options that are relevant to them.
  1. **Administrator** - The most powerful user role. This role has full access to the site and should be reserved only for the owner of the site. There should only be one user with these privileges. 
  2. **Group Admin** - The stakeholders of each category. These users can add/delete/edit users within their group and manage content. There should only be one Group Admin per category (i.e. Voice & Tone, Logo Guidelines, etc.)
  3. **Editor** - Team members responsible for adding/updating content. These users are only able to manage content and cannot manage users. _This is the default user role and should be used for the majority of users._
  4. **Viewer** - Users that are permitted read-only access to website. These users have no editing privileges and cannot access the back-end. This should be reserved for vendors that need temporary access to view the website. 
  ### Adding a New User
  1. In the admin back-end, go to **Users** in the sidebar
  2. Click **Add New** at the top of the page
  3. Fill out the form with new user's information
  4. Assign the new user with an appropriate user role
   ### Deleting a User
  1. In the admin back-end, go to **Users** in the sidebar
  2. Find the user you'd like to delete in the list and hover over their name
  3. Click on the red **Delete** button below their name 


## Homepage
The homepage _cannot_ be edited from the CMS. It can only be edited directly from the theme files `home.php` and `home.css`.


## Staging
  ### Switching to Staging Environment
  A staging environment can be accessed at [styleguide.coach/dev/wp-admin](https://styleguide.coach/dev/wp-admin). Please use this to test all changes before pushing anything to production.


## Plugins
  ### Content Management
  * **Elementor** - Allows editors to add & edit content to site from CMS
  * **Elementor Pro** - Adds "Pro" features to Elementor visual editor
  * **FileBird Lite** - Allows media to be organized into folders & categories in the back-end
  * **Category Order and Taxonomy Terms Order** - To reorder Homepage
  * **Post Types Order** - To reorder Sidebar
  
  ### User Management
  * **Members** - User management dashboard
  * **Members Hierarchy** - Allows admin to add a hierarchy of permissions to user roles
  * **Restrict User Taxonomies** - Assign a specific category to a user role to restrict which content they can manage
  * **Peter's Login Redirect** - Redirect users to different locations after logging in
  
  ### Admin 
  * **Ajaxify WordPress Site** - Adds ajax functionality to site
  * **Easy Table of Contents** - Used in sidebar.php to add dynamic a menu of all *h2* elements on a page
  * **Password Protected** - Password-protects the entire website
  * **GitHub Updater** - To pull theme updates from GitHub repository
  * **WP Staging** - Create a staging clone site for testing & developing
  * **Autoptmize** - Makes site faster by optimizing CSS, JS, images, Google fonts and more
  * **WP Super Cache** - Manage cache 
  * **Adminimize** - Allows admin to add/remove menu items from the dashboard based on a user's role
  * **Fancy Admin UI** - Changes the UI of the admin dashboard
  * **Fast User Switching** - Allows admin to view dashboard as different user roles

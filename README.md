# Summary

A repository of small-medium frontend projects to study & re-create for practice using semantics and html & css best practices and tricks. I've created this repository to work in tandem and follow along with a new study group I've started in my local community. I'm trying to make it as self-explanatory as possible so others that simply view the repo from elsewhere will still be able to gain value from it. *The repo is still a work in progress. Aiming to have it more finalized by 3/3.*

## Things this repo focuses on

* Consistency
* DRY Principles
* Semantic Markup
* Progressive Enhancement
* CSS Tricks and No-JS Solutions

### Useful Links

* List of all [HTML elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)
* [Resilient Web Design](https://resilientwebdesign.com) (Read)
* CSS Architecture [Original Inspiration (ITCSS)](https://www.xfive.co/blog/itcss-scalable-maintainable-css-architecture/) -- [My Version](https://github.com/im-ironclad/ironclad-gulp-starterkit)
* WCAG [Contrast Ratio](https://contrast-ratio.com/) Tool

### Usage

1. Fork & Clone the repository to your github account
2. Simply open the index.html in the repository root to navigate through the repo and activities.
3. When you want to start an activity, create a new branch *git ch -B {activity#}/{yourgithubusername}* (i.e. *git ch -B activity1/im-ironclad)

### Directory Structure

```bash
├── activities                 # Directory that holds all of the Activities
│   └── responsive-navigation  # Directory for Activity 1: Responsive Navigation
│       ├── example            # Directory with example code if you choose to reference it, try not to until you have to!
│       ├── starter-files      # Directory with a basic file setup to get you started with the activity
│       └── index.html         # Index html page for the Responsive Navigation activity
├── styles                     # Directory with our main style Architecture (This affects everything but the activity example and starter files)
│   ├── components             # Subdirectory with components
│   │   ├── _activities.js     # Styles for activity pages
│   │   ├── _global-nav.js     # Styles for the global nav
│   │   ├── _helpful-links.js  # Styles for helpful-links list
│   │   ├── _link.js           # Styles for anchor links
│   │   └── _main.js           # Styles for the main element which holds all content
│   ├── generic                # Subdirectory with generic reset(s)
│   │   ├── _elements.scss     # Styles for our html elements (per project design, if applicable)
│   │   └── _reset.scss        # Styles for resetting browser defaults
│   ├── mixins                 # Subdirectory with mixins
│   │   ├── _animations.scss   # Mixins for animations (currently empty)
│   │   ├── _layout.scss       # Mixins for layout helpers (i.e. container() mixin)
│   │   └── _typography.scss   # Mixins for typography helpers (i.e. font-size() mixin)
│   ├── settings               # Subdirectory with variables used throughout our styles
│   │   └── _variables.scss    # Variables for our CSS regarding layout, spacing, colors and font styles
│   ├── app.css                # Compiled, final version of our SCSS
│   └── app.scss               # Uncompiled, development SCSS root file
├── .gitignore                 # gitignore
├── .index.html                # Index html page for the repo root
├── package.json               # Package config with scripts, list of dependencies etc.
├── README.md                  # Project README file
└── yarn.lock                  # Yarn lock file
```
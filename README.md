# Promote Posts Plugin by Global Food Book
WIP GFB's Promote Post plugin..

## Description
This plugin assists with delivery and promotion of posts on social networks and other media channels.

Efforts for [www.globalfoodbook.com](http://www.globalfoodbook.com).

## Installation

1. Upload /promote-posts to the /wp-content/plugins directory
2. Activate the plugin through the Plugins menu in WordPress

## Frequently Asked Questions


## Screenshots

1. None

## Changelog

### 1.0
* Initial Release

## Upgrade Notice

### 1
* Initial Release

## Notes to developers

#### Contributing

If you would like to contribute to our suite of plugins, head on over to [Global Food Book Labs](https://github.com/globalfoodbook). Feel free to fork and contribute back.

1. Fork it (https://github.com/globalfoodbook/promote-posts)
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request

#### Adding Screenshots to the Wordpress repo

1. Rename each screenshot for each step like this. For step 1 the screenshot is screenshot-1.png.
2. The banner image is named as banner-772x250.png.
3. Use an SVN client like smart svn or rapid svn etc to upload these images to the /assets folder.
4. After this, commit and all will be picked up.

#### Pushing plugin to Wordpress svn repo

1. Clone this repo

          `git clone git@github.com:globalfoodbook/promote-posts.git`

2. cd path/to/promote-posts
3. vim .git/config
4. Add the code below:

          [svn-remote "svn"]
                  url = http://plugins.svn.wordpress.org/[plugin_name]/trunk
                  fetch = :refs/remotes/git-svn

5. Then merge the master into the new branch:

          `git svn fetch svn`
          `git checkout -b svn git-svn`
          `git merge master`
          `git svn dcommit --username [Wordpress.org username]`

6. Then rebase that branch to the master, and you can dcommit from the master to svn

          `git checkout master`
          `git rebase svn`
          `git branch -d svn`
          `git svn dcommit --username [Wordpress.org username]`

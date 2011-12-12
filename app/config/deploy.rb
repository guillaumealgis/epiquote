set :application, "epiquote"
set :domain,      "#{application}.fr"
set :deploy_to,   "/var/www/#{domain}"
set :app_path,    "app"

set :repository,  "git://github.com/guillaume-algis/epiquote.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, `subversion` or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Rails migrations will run

set  :use_sudo,   false
set  :keep_releases,  3

#set  :update_vendors,    true
set  :update_vendors,    false
set  :shared_files,      ["app/config/parameters.ini"]
set  :shared_children,   [app_path + "/logs", web_path + "/uploads", "vendor"]
set  :user,              "deployer"
set  :branch,            "master"

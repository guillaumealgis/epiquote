#! /bin/sh

cd `dirname $0`

if [ ! $1 ]; then
    echo "Usage: ./bump-version.sh version-id"
    exit 1
fi

VERSION=$1

README='./README.md'
echo "Bumping version number in" $README
sed -Ee "s/^Version .*/Version ${VERSION}/" -i '' $README
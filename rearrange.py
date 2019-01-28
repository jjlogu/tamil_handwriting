#!/usr/bin/env python2
from __future__ import print_function
import sys, os


def main():
    if 2 > len(sys.argv):
        print("Argument missing 'DATA_DIR'")
        exit(1)
    DATA_DIR = sys.argv[1]

    for letter_code in range(1, 157):
        letter_dir = "{}/{}".format(DATA_DIR, letter_code)
        if not os.path.exists(letter_dir):
            os.makedirs(letter_dir, 0755)

        cmd = "mv {}/{}_*.png {}".format(DATA_DIR, letter_code, letter_dir)
        if 0 != os.system(cmd):
            print("Failed: {}".format(cmd))


if "__main__" == __name__:
    main()

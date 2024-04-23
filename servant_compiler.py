import shutil

filenames = ['servant_header.php', 'servant_viewer.html', 'servant_viewer.css']

with open('D:\GavCried\servant_viewer.php', 'w') as outfile:
    with open(filenames[0]) as infile:
        outfile.write(infile.read())

    outfile.write('\n')
    outfile.write('\n')
    outfile.write('echo "\n')

    with open(filenames[1]) as infile:
        outfile.write(infile.read())

    outfile.write('\n')
    outfile.write('";\n')
    outfile.write('?>\n')

    outfile.write('\n')
    outfile.write('<style>\n')

    with open(filenames[2]) as infile:
        outfile.write(infile.read())

    outfile.write('\n')
    outfile.write('</style>')
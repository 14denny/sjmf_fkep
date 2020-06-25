use strict;

my $ls = `find .`;
my @files = split('\n', $ls);

foreach my $file(@files){
    if (!(-d $file)){
        my $cat = `cat $file`;

        if($cat =~ /toast/gm){
            print $file."\n";
        }
    }
}
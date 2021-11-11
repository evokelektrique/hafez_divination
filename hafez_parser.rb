# frozen_string_literal: true

# Hafez divination parser class (DEPRECATED)
class HafezParser
    attr_accessor :path, :lines

    def initialize(path)
        @path = path
        @lines = []
    end

    def parse
        File.foreach(@path).with_index do |line, i|
            # Remove parentheses
            @lines << parse_line(line).split(", ")
        end
    end

    def parse_line(line)
        line.slice!("(")
        line.slice!(")")
        line.slice!(";")

        line
    end
end

path = ARGV[0]

parser = HafezParser.new(path)
parser.parse
parser.lines.each do |line|
    poem = line[1].gsub("'", "")
    interpretation = line[2].gsub("'", "")
end
